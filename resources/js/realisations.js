document.addEventListener("DOMContentLoaded", function () {
    const filterButtons = document.querySelectorAll(".realisationFilterBtn-js");
    const imageItems = document.querySelectorAll(".realisationItem-js");

    filterButtons.forEach((button) => {
        button.addEventListener("click", function () {
            const selectedCategory = this.getAttribute("data-title");

            filterButtons.forEach((btn) => {
                btn.classList.remove("btn-active");
            });

            this.classList.add("btn-active");

            imageItems.forEach((item) => {
                const itemCategories = item.getAttribute("data-title"); 
                
                if (selectedCategory === "" || itemCategories.split(', ').includes(selectedCategory)) {
                    item.style.display = "flex";
                } else {
                    item.style.display = "none";
                }
            });
        });
    });
});