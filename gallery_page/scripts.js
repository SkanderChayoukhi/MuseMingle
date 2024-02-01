document.addEventListener('DOMContentLoaded', function () {
    const categories = document.querySelectorAll('.section2 .category');

    categories.forEach(category => {
        category.addEventListener('click', function () {
            categories.forEach(cat => {
                cat.classList.remove('categorie-selected');
            });
            category.classList.add('categorie-selected');
        });
    });
});


document.addEventListener("DOMContentLoaded", function () {
    const galleryContainer = document.getElementById("gallery");
    const paginationContainer = document.getElementById("pagination");
    const searchInput = document.getElementById("searchInput");
    const addImageButton = document.getElementById("addImageButton");

    // Array of image URLs
    const imageUrls = [
        "./assests/images/1.jfif",
        "./assests/images/2.jfif",
        "./assests/images/3.jfif",
        "./assests/images/4.jfif",
        "./assests/images/5.jfif",
        "./assests/images/6.jfif",
        "./assests/images/7.jfif",
        "./assests/images/8.jfif",
        "./assests/images/9.jfif",
        "./assests/images/10.jfif",
        "./assests/images/11.jfif",
        "./assests/images/12.jfif",
        "./assests/images/13.jfif",
        "./assests/images/14.jfif",
        "./assests/images/15.jfif",
        "./assests/images/16.jfif",
        "./assests/images/17.jfif",
        "./assests/images/18.jfif",
        "./assests/images/19.jfif",
        "./assests/images/20.jfif",
        "./assests/images/21.jfif",
    ];

    const imagesPerPage = 12;
    let currentPage = 1;

    function displayImages(page, images = imageUrls) {
        const startIndex = (page - 1) * imagesPerPage;
        const endIndex = startIndex + imagesPerPage;
        const displayedImages = images.slice(startIndex, endIndex);

        // Clear existing images and create new ones
        galleryContainer.innerHTML = "";
        displayedImages.forEach((url, index) => {
            const imgContainer = document.createElement("div");
            imgContainer.classList.add("image-container");

            const imgElement = document.createElement("img");
            imgElement.src = url;
            imgElement.alt = "Gallery Image";

            const detailsContainer = document.createElement("div");
            detailsContainer.classList.add("image-details");
            detailsContainer.innerHTML = "Name <br> Artist <br> Price "; // Add your details here

            const openButton = document.createElement("button");
            openButton.textContent = "View More";
            openButton.classList.add("open-button");
            openButton.addEventListener("click", () => openImage(url));

            imgContainer.appendChild(imgElement);
            imgContainer.appendChild(detailsContainer);
            imgContainer.appendChild(openButton);

            galleryContainer.appendChild(imgContainer);
        });
    }

    function displayPaginationButtons(images = imageUrls) {
        const pageCount = Math.ceil(images.length / imagesPerPage);
        paginationContainer.innerHTML = "";

        for (let i = 1; i <= pageCount; i++) {
            const button = document.createElement("button");
            button.textContent = i;
            button.addEventListener("click", () => {
                currentPage = i;
                displayImages(currentPage, images);

                // Remove the 'selected' class from all buttons
                document.querySelectorAll('.pagination button').forEach(btn => {
                    btn.classList.remove('selected');
                });

                // Add the 'selected' class to the clicked button
                button.classList.add('selected');
            });
            paginationContainer.appendChild(button);

            // Initially add the 'selected' class to the first button
            if (i === 1) {
                button.classList.add('selected');
            }
        }
    }

    // Function to open the image in a new window or modal (customize as needed)
    function openImage(url) {
        window.open(url, "_blank");
    }

    // Search functionality
    searchInput.addEventListener("input", () => {
        const searchTerm = searchInput.value.toLowerCase();
        const filteredImages = imageUrls.filter(url => url.toLowerCase().includes(searchTerm));
        displayImages(currentPage, filteredImages);
        displayPaginationButtons(filteredImages);
    });

    // Add Image button functionality
    addImageButton.addEventListener("click", () => {
        // Redirect to another page
        // window.location.href = "your_target_page.html"; 
        window.location.reload();
    });
    

    // Initial display
    displayImages(currentPage);
    displayPaginationButtons();
});
