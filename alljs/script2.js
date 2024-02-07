document.addEventListener("DOMContentLoaded", async function () {
    const categories = document.querySelectorAll('.section2 .category');
    const galleryContainer = document.getElementById("gallery");
    const paginationContainer = document.getElementById("pagination");
    const searchInput = document.getElementById("searchInput");
    const addImageButton = document.getElementById("addImageButton");

    const serverURL = "http://localhost/php/projetjunior/MuseMingle/allphp/fetch_gallery_images2.php";

    async function fetchImagesFromCategory(category) {
        try {
            const response = await fetch(`${serverURL}?category=${category}`);
            const data = await response.json();

            const imageDetails = data.map(item => ({
                url: item.url_image,
                title: item.title,
                artist: item.nomArtist,
                price: item.price
            }));

            return imageDetails;
        } catch (error) {
            console.error(`Error fetching images from ${category}:`, error);
            return [];
        }
    }

    const imagesPerPage = 12;
    let currentPage = 1;
    let currentCategory = 'all'; // Store the current category
    let allImages = [];

    async function displayImages(page, images) {
        const startIndex = (page - 1) * imagesPerPage;
        const endIndex = startIndex + imagesPerPage;
        const displayedImages = images.slice(startIndex, endIndex);

        galleryContainer.innerHTML = "";
        displayedImages.forEach(({ url, title, artist, price }) => {
            const imgContainer = document.createElement("div");
            imgContainer.classList.add("image-container");

            const imgElement = document.createElement("img");
            imgElement.src = url;
            imgElement.alt = "Gallery Image";

            const detailsContainer = document.createElement("div");
            detailsContainer.classList.add("image-details");
            detailsContainer.innerHTML = `<strong>${title}</strong><br>Artist: ${artist}<br>Price: ${price}DT`;

            const openButton = document.createElement("button");
            openButton.textContent = "View More";
            openButton.classList.add("open-button");
            openButton.addEventListener("click", () => {
                const titleParam = encodeURIComponent(title); // Encode title
                const categoryParam = encodeURIComponent(currentCategory); // Encode category
                const url = `../allhtml/IMG.html?category=${categoryParam}&title=${titleParam}`; // Construct URL with parameters
                window.open(url, '_blank'); // Open new tab with the URL
            });

            imgContainer.appendChild(imgElement);
            imgContainer.appendChild(detailsContainer);
            imgContainer.appendChild(openButton);

            galleryContainer.appendChild(imgContainer);
        });
    }

    async function displayPaginationButtons(images) {
        const pageCount = Math.ceil(images.length / imagesPerPage);
        paginationContainer.innerHTML = "";

        for (let i = 1; i <= pageCount; i++) {
            const button = document.createElement("button");
            button.textContent = i;
            paginationContainer.appendChild(button);
        }

        // Event delegation for handling pagination button clicks
        paginationContainer.addEventListener("click", async (event) => {
            if (event.target.tagName === "BUTTON") {
                currentPage = parseInt(event.target.textContent);
                console.log("Current Page:", currentPage); // Debugging statement

                displayImages(currentPage, allImages);

                document.querySelectorAll('.pagination button').forEach(btn => {
                    btn.classList.remove('selected');
                });

                event.target.classList.add('selected');
            }
        });

        // Select the first page initially
        const firstPaginationButton = paginationContainer.querySelector("button");
        if (firstPaginationButton) {
            firstPaginationButton.classList.add('selected');
        }

    }

    // Search functionality
    searchInput.addEventListener("input", async () => {
        const searchTerm = searchInput.value.toLowerCase();
        const filteredImages = allImages.filter(({ title }) => title.toLowerCase().includes(searchTerm));
        displayImages(1, filteredImages); // Always start displaying from page 1
        displayPaginationButtons(filteredImages);
    });

    // Event listeners for category clicks
    categories.forEach(category => {
        category.addEventListener('click', async function () {
            categories.forEach(cat => {
                cat.classList.remove('categorie-selected');
            });
            category.classList.add('categorie-selected');

            const categoryName = category.getAttribute('data-category');
            currentCategory = categoryName;

            if (categoryName === 'all') {
                const allCategories = ['paintings', 'photography', 'drawings'];
                const promises = allCategories.map(cat => fetchImagesFromCategory(cat));
                const imagesArrays = await Promise.all(promises);
                allImages = imagesArrays.flat();
                currentPage = 1; // Reset currentPage to 1 when switching to 'all' category
                displayImages(currentPage, allImages);
                displayPaginationButtons(allImages);
            } else {
                const images = await fetchImagesFromCategory(categoryName);
                allImages = images;
                currentPage = 1; // Reset currentPage to 1 when switching to another category
                displayImages(currentPage, images);
                displayPaginationButtons(images);
            }
        });
    });

    // Trigger click event on 'all' category initially
    const allCategoryButton = document.querySelector('.section2 .category[data-category="all"]');
    if (allCategoryButton) {
        allCategoryButton.click();
    }

    // Add Image button functionality
    // addImageButton.addEventListener("click", () => {
    //     window.location.reload();
    // });

    // Fetch and display images based on the default category
    const initialCategory = 'all';
    const initialImages = await fetchImagesFromCategory(initialCategory);
    allImages = initialImages;
    displayImages(currentPage, initialImages);
    displayPaginationButtons(initialImages);
});

          