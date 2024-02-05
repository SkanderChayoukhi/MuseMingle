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
    let currentCategory = 'all';
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
                window.open('../allhtml/IMG.html', '_blank');
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
            button.addEventListener("click", async () => {
                currentPage = i;
                const updatedImages = await fetchImages(currentCategory);
                displayImages(currentPage, updatedImages);

                document.querySelectorAll('.pagination button').forEach(btn => {
                    btn.classList.remove('selected');
                });

                button.classList.add('selected');
            });
            paginationContainer.appendChild(button);

            if (i === 1) {
                button.classList.add('selected');
            }
        }
    }

    function openImage(url) {
        window.open(url, "_blank");
    }

    // Search functionality
    searchInput.addEventListener("input", async () => {
        const searchTerm = searchInput.value.toLowerCase();
        const filteredImages = allImages.filter(({ title }) => title.toLowerCase().includes(searchTerm));
        displayImages(currentPage, filteredImages);
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
                displayImages(currentPage, allImages);
                displayPaginationButtons(allImages);
            } else {
                const images = await fetchImagesFromCategory(categoryName);
                allImages = images;
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
    addImageButton.addEventListener("click", () => {
        window.location.reload();
    });

    // Initial display
    // Fetch and display images based on the default category
    const initialCategory = 'all';
    const initialImages = await fetchImagesFromCategory(initialCategory);
    allImages = initialImages;
    displayImages(currentPage, initialImages);
    displayPaginationButtons(initialImages);
});
          