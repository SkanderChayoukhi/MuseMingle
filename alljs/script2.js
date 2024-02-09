document.addEventListener("DOMContentLoaded", async function () {
    const categories = document.querySelectorAll('.section2 .category');
    const galleryContainer = document.getElementById("gallery");
    const paginationContainer = document.getElementById("pagination");
    const searchInput = document.getElementById("searchInput");

    const serverURL = "http://localhost/php/projetjunior/MuseMingle/allphp/fetch_gallery_images2.php";

    async function fetchImagesFromCategory(category) {
        try {
            const response = await fetch(`${serverURL}?category=${category}`);
            const data = await response.json();

            const imageDetails = data.map(item => ({
                id: item.id,
                url: item.url_image,
                title: item.title,
                artist: item.nomArtist,
                price: item.price,
                category: item.category // Include the category of each image
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
        displayedImages.forEach(({ url, title, artist, price, id, category }) => { // Pass the category of each image
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
                const urlParam = encodeURIComponent(url); // Encode url
                const idParam = encodeURIComponent(id); // Encode id
                const categoryParam = encodeURIComponent(category); // Encode category
                const allurl = `../allphp/IMG.php?url=${urlParam}&id=${idParam}&category=${categoryParam}`; // Construct URL with parameters
                window.open(allurl, '_blank'); // Open new tab with the URL
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
        displayImages(1, filteredImages);
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

            let images;
            if (categoryName === 'all') {
                const allCategories = ['paintings', 'photography', 'drawings'];
                const promises = allCategories.map(cat => fetchImagesFromCategory(cat));
                const imagesArrays = await Promise.all(promises);
                images = imagesArrays.flat();
            } else {
                images = await fetchImagesFromCategory(categoryName);
            }
            
            allImages = images;
            currentPage = 1; // Reset currentPage to 1 when switching to another category
            displayImages(currentPage, images);
            displayPaginationButtons(images);
        });
    });

    // Trigger click event on 'all' category initially
    const allCategoryButton = document.querySelector('.section2 .category[data-category="all"]');
    if (allCategoryButton) {
        allCategoryButton.click();
    }
});
