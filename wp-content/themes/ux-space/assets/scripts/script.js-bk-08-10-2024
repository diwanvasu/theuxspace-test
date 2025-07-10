const locomotiveScroll = new LocomotiveScroll();

// Toggle Dark Mode JS
function applyTheme(theme) {
  if (theme === "dark") {
    document.documentElement.classList.add("dark");
  } else {
    document.documentElement.classList.remove("dark");
  }
}

function isAnimating() {
  setTimeout(() => {
    document
      .querySelector(".overlay--toggle")
      .classList.remove("overlay--toggle-open");
    document
      .querySelector(".overlay--toggle-2")
      .classList.remove("overlay--toggle-2-open");
  }, 700);

  document
    .querySelector(".overlay--toggle")
    .classList.add("overlay--toggle-open");
  document
    .querySelector(".overlay--toggle-2")
    .classList.add("overlay--toggle-2-open");
}

document.addEventListener("DOMContentLoaded", function () {
  const storedTheme = localStorage.getItem("theme");
  if (storedTheme) {
    applyTheme(storedTheme);
  }
});

document.getElementById("toggleButton").addEventListener("click", function () {
  isAnimating();
  setTimeout(() => {
    document.documentElement.classList.toggle("dark");
    const currentTheme = document.documentElement.classList.contains("dark")
      ? "dark"
      : "light";

    localStorage.setItem("theme", currentTheme);
  }, 700);

  document.querySelector(".overlay--toggle-2").innerHTML =
    document.documentElement.classList.contains("dark")
      ? "Light Mode"
      : "Dark Mode";
});

// Image change tabs
document.addEventListener("DOMContentLoaded", function () {
  const accordionButtons = document.querySelectorAll(".accordion-tabs-button");
  const accordionContents = document.querySelectorAll(
    ".accordion-tabs-content"
  );
  const accordionImages = document.querySelectorAll(".accordion-tabs-img");

  console.log(accordionButtons);

  accordionButtons.forEach((button, index) => {
    button.addEventListener("click", function () {
      const content = this.parentElement.nextElementSibling;
      const accordionItem = this.closest(".accordion-tabs-item");

      const isOpen = accordionItem.classList.contains("open");

      accordionContents.forEach((content) => {
        const item = content.closest(".accordion-tabs-item");
        if (item !== accordionItem) {
          content.style.maxHeight = null;
          if (item) {
            item.classList.remove("open");
          }
        }
      });

      accordionImages.forEach((img, imgIndex) => {
        if (imgIndex === index) {
          img.classList.add("show");
        } else {
          img.classList.remove("show");
        }
      });

      if (!isOpen) {
        content.style.maxHeight = content.scrollHeight + "px";
        accordionItem.classList.add("open");
      } else {
        content.style.maxHeight = null;
        accordionItem.classList.remove("open");
      }
    });
  });
});

// Tabs JS
document.addEventListener("DOMContentLoaded", function () {
  const tabs = document.querySelectorAll('[role="tab"]');
  const tabPanels = document.querySelectorAll('[role="tabpanel"]');

  // Show only the first tab and panel by default
  tabs.forEach((tab, index) => {
    if (index === 0) {
      tab.setAttribute("aria-selected", "true");
      tab.setAttribute("data-state", "active");
    } else {
      tab.setAttribute("aria-selected", "false");
      tab.setAttribute("data-state", "inactive");
    }
  });

  tabPanels.forEach((panel, index) => {
    if (index === 0) {
      panel.classList.add("opacity-100", "visible", "pointer-events-auto");
      panel.classList.remove("opacity-0", "invisible", "pointer-events-none");
      panel.setAttribute("data-state", "active");
    } else {
      panel.classList.add("opacity-0", "invisible", "pointer-events-none");
      panel.classList.remove("opacity-100", "visible", "pointer-events-auto");
      panel.setAttribute("data-state", "inactive");
    }
  });

  tabs.forEach((tab) => {
    tab.addEventListener("click", function () {
      const tabValue = tab.getAttribute("value");

      // Remove active state from all tabs and panels
      tabs.forEach((t) => {
        t.setAttribute("aria-selected", "false");
        t.setAttribute("data-state", "inactive");
      });
      tabPanels.forEach((panel) => {
        panel.classList.add("opacity-0", "invisible", "pointer-events-none");
        panel.classList.remove("opacity-100", "visible", "pointer-events-auto");
        panel.setAttribute("data-state", "inactive");
      });

      // Add active state to the clicked tab and corresponding panel
      tab.setAttribute("aria-selected", "true");
      tab.setAttribute("data-state", "active");
      const activePanel = document.querySelector(
        `[role="tabpanel"][value="${tabValue}"]`
      );
      activePanel.classList.add(
        "opacity-100",
        "visible",
        "pointer-events-auto"
      );
      activePanel.classList.remove(
        "opacity-0",
        "invisible",
        "pointer-events-none"
      );
      activePanel.setAttribute("data-state", "active");
    });
  });
});

// work mega menu JS
document.getElementById("workMenu").addEventListener("click", function (e) {
  e.preventDefault(); // Prevent default anchor behavior
  const megaMenu = document.getElementById("megaMenuId");
  const overlayEl = document.querySelector(".overlay--el");
  megaMenu.classList.toggle("mega-menu"); // Toggle the 'hidden' class
  overlayEl.classList.toggle("overlay--el--open");
  document.getElementById("workMenu").classList.toggle("work-menu--open");
});

const overlayEl = document.querySelector(".overlay--el");

overlayEl.addEventListener("click", function () {
  const megaMenu = document.getElementById("megaMenuId");
  megaMenu.classList.toggle("mega-menu"); // Toggle the 'hidden' class
  overlayEl.classList.toggle("overlay--el--open");
  document.getElementById("workMenu").classList.toggle("work-menu--open");
});

// Slider JS
var swiper = new Swiper(".testimonial-slider", {
  slidesPerView: 1,
  spaceBetween: 30,
  loop: true,
  navigation: {
    nextEl: ".next-btn",
    prevEl: ".prev-btn",
  },
  pagination: {
    el: ".slider-pagination",
    clickable: true,
  },
  breakpoints: {
    641: {
      slidesPerView: 2,
      spaceBetween: 40,
    },
    991: {
      slidesPerView: 3,
      spaceBetween: 40,
    },
    1199: {
      slidesPerView: 4,
      spaceBetween: 40,
    },
  },
});
var swiper = new Swiper(".concept-slider", {
  slidesPerView: 1,
  spaceBetween: 30,
  loop: false,
  pagination: {
    el: ".slider-pagination",
    clickable: true,
  },
  breakpoints: {
    641: {
      slidesPerView: 2,
      spaceBetween: 40,
    },
    991: {
      slidesPerView: 3,
      spaceBetween: 40,
    },
    1199: {
      slidesPerView: 4,
      spaceBetween: 40,
    },
  },
});
var swiper = new Swiper(".tabs-slider", {
  slidesPerView: 1,
  spaceBetween: 20,
  loop: false,
  navigation: {
    nextEl: ".next-btn",
    prevEl: ".prev-btn",
  },
  pagination: {
    el: ".slider-pagination",
    clickable: true,
  },
  breakpoints: {
    576: {
      spaceBetween: 30,
    },
  },
});

// Slider Expertise JS
var swiper = new Swiper(".expertise-slider", {
  slidesPerView: "auto",
  spaceBetween: 30,
  loop: false,
  pagination: {
    el: ".slider-pagination",
    clickable: true,
  },
});

// Fresh Slider JS
var swiper = new Swiper(".fresh-slider", {
  loop: true,
  autoplay: {
    delay: 3000,
  },

  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

// Style Guide JS
var swiper = new Swiper(".style-slider", {
  slidesPerView: 1,
  spaceBetween: 15,
  grabCursor: true,
  scrollbar: {
    el: ".swiper-scrollbar",
  },
  breakpoints: {
    768: {
      slidesPerView: 2,
      spaceBetween: 30,
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 48,
    },
  },
});

const tlProcessScroll = gsap.timeline({
  scrollTrigger: {
    trigger: ".process--scroll",
    start: "-100%",
    end: "100%",
    scrub: true,
    markers: false,
  },
});

tlProcessScroll
  .fromTo(".span1", { x: -300 }, { x: 0 })
  .fromTo(".span2", { x: -100 }, { x: 0 }, "<")
  .fromTo(".span3", { x: 200 }, { x: 0 }, "<");

const tlGalleryScroll = gsap.timeline({
  scrollTrigger: {
    trigger: ".gallery--scroll",
    start: "-48%",
    end: "36%",
    scrub: true,
    markers: false,
  },
});

tlGalleryScroll
  .fromTo(
    ".gallery--scroll-img-1",
    { y: 0, rotate: 0 },
    { y: 200, x: -400, rotate: -16 },
    "<"
  )
  .fromTo(
    ".gallery--scroll-img-2",
    { y: 0, rotate: 0 },
    { y: 200, x: 400, rotate: 16 },
    "<"
  )
  .fromTo(
    ".gallery--scroll-img-3",
    { y: 0, rotate: 0 },
    { y: -200, x: -400, rotate: -16 },
    "<"
  )
  .fromTo(
    ".gallery--scroll-img-4",
    { y: 0, rotate: 0 },
    { y: -200, x: 400, rotate: 16 },
    "<"
  )
  .fromTo(
    ".gallery--scroll-text",
    { y: 100, opacity: 0 },
    { y: 0, opacity: 1 },
    "=-0.5"
  );

const tlTextScroll = gsap.timeline({
  scrollTrigger: {
    trigger: ".text--scroll",
    start: "-1000%",
    end: "-100%",
    scrub: true,
    markers: false,
  },
});

tlTextScroll.fromTo(
  ".text--scroll",
  {
    backgroundPosition: "0% 0%",
  },
  { backgroundPosition: "-100% 0%" }
);

// Accordion JS
// Select all accordion buttons and content areas
const accordionButtons = document.querySelectorAll(".accordion-button");
const accordionContents = document.querySelectorAll(".accordion-content");
const accordionIcons = document.querySelectorAll(".accordion-icon");

// Define the class you want to toggle
const rotateClass = "active-icon"; // You can name this class whatever you like

// Add event listeners to all accordion buttons
accordionButtons.forEach((button, index) => {
  button.addEventListener("click", () => {
    // Close all other accordions and reset icons
    accordionContents.forEach((content, contentIndex) => {
      if (contentIndex !== index) {
        content.style.maxHeight = null; // Close other accordions
        if (accordionIcons[contentIndex]) {
          // Check if icon exists
          accordionIcons[contentIndex].classList.remove(rotateClass); // Remove class from other icons
        }
      }
    });

    // Toggle the clicked accordion
    const content = accordionContents[index];
    const icon = accordionIcons[index];

    if (content.style.maxHeight) {
      content.style.maxHeight = null; // Close accordion
      if (icon) {
        // Check if icon exists
        icon.classList.remove(rotateClass); // Remove class from the clicked icon
      }
    } else {
      content.style.maxHeight = content.scrollHeight + "px"; // Open accordion
      if (icon) {
        // Check if icon exists
        icon.classList.add(rotateClass); // Add class to the clicked icon
      }
    }
  });
});

const founderText = document.querySelector(".founder--scroll-text");

if (founderText) {
  // Define the text to be split
  const textContent = founderText.innerText.split(/(?<=,|\.|\!|\?|\s)/);

  // Clear the original text content
  founderText.innerHTML = "";

  // Split the text and create span elements
  textContent.forEach((text) => {
    const span = document.createElement("span");
    span.classList.add("highlight", "inline-block", "mr-1");
    span.innerHTML = text;
    founderText.appendChild(span);
  });

  const tlFounderScroll = gsap.timeline({
    scrollTrigger: {
      trigger: ".founder--scroll",
      start: "top 100%",
      end: "-50%",
      scrub: true,
      markers: false,
    },
  });

  tlFounderScroll.fromTo(
    ".highlight",
    { x: 0, opacity: 0.2 },
    { x: 0, opacity: 1, stagger: 0.1 }
  );
}

const menuBtn = document.querySelector(".menu-btn");
const menuBtnClose = document.querySelector("#closeMobileSidebar");
const overlayMenu = document.querySelector(".menu-overlay");
const htmlTag = document.documentElement; // Select the <html> tag

menuBtn.addEventListener("click", () => {
  htmlTag.classList.add("menu-open");
});

menuBtnClose.addEventListener("click", () => {
  htmlTag.classList.remove("menu-open");
});

overlayMenu.addEventListener("click", () => {
  htmlTag.classList.remove("menu-open");
});

const tlGalleryScroll2 = gsap.timeline({
  scrollTrigger: {
    trigger: ".gallery--scroll-2",
    start: "0%",
    end: "100%",
    scrub: true,
    markers: false,
  },
});

tlGalleryScroll2
  .fromTo(".gallery--scroll-2-img-1", { x: 0 }, { x: -200 }, "<")
  .fromTo(".gallery--scroll-2-img-2", { x: 0 }, { x: 800 }, "<")
  .fromTo(".gallery--scroll-2-text", { y: 100 }, { y: 0 }, "<")
  .fromTo(".gallery--scroll-2-img-3", { x: 0 }, { x: -800 }, "<")
  .fromTo(".gallery--scroll-2-img-4", { x: 0 }, { x: 200 }, "<");

const min = 1;
const max = 16;
const paginationSpan = document.createElement("span");
paginationSpan.innerText = "...";
paginationSpan.classList =
  "flex justify-center p-2 select-none items-center sm:min-w-[2.625rem] w-8 h-8 sm:w-12 sm:h-12 rounded-full border border-[#28303F] dark:border-white";
const paginationDiv = document.querySelector(".pagination");
const goPrevBtn = document.querySelector(".goPrev");
const goNextBtn = document.querySelector(".goNext");
goPrevBtn?.addEventListener("click", () => handlePrevNextClick("prev"));
goNextBtn?.addEventListener("click", () => handlePrevNextClick("next"));
const mainContainer = document.getElementById("mainContainer");
let activePage;

const createPaginationNumBtns = (startIdx) => {
  // 10 - 16
  if (startIdx >= 10 && startIdx <= max) {
    let newStartIdx = startIdx - (6 - (max - startIdx));
    while (newStartIdx <= max) {
      const paginationNumBtn = document.createElement("button");
      paginationNumBtn.innerText = newStartIdx;
      paginationNumBtn.classList =
        "w-8 h-8 sm:w-12 sm:h-12 p-2 text-xs sm:text-lg rounded-full border border-[#28303F] dark:border-white hover:bg-[#FFDD00] hover:border-[#FFDD00] hover:text-[#28303f] sm:min-w-[2.625rem]";
      paginationNumBtn.addEventListener("click", (e) => handleNumBtnClick(e));
      paginationDiv.appendChild(paginationNumBtn);
      newStartIdx++;
    }
  }
  // 1 - 9
  else if (startIdx < 10 && startIdx >= min) {
    let tempMax = startIdx + 7;
    while (startIdx < tempMax) {
      const paginationNumBtn = document.createElement("button");
      paginationNumBtn.innerText = startIdx;
      paginationNumBtn.classList =
        "w-8 h-8 sm:w-12 sm:h-12 p-2 text-xs sm:text-lg rounded-full border border-[#28303F] dark:border-white hover:bg-[#FFDD00] hover:border-[#FFDD00] hover:text-[#28303f] sm:min-w-[2.625rem]";
      paginationNumBtn.addEventListener("click", (e) => handleNumBtnClick(e));

      if (tempMax - startIdx === 2) {
        paginationDiv?.appendChild(paginationSpan);
        paginationNumBtn.innerText = max;
        paginationDiv?.appendChild(paginationNumBtn);
        break;
      }

      paginationDiv?.appendChild(paginationNumBtn);
      startIdx++;
    }
  } else {
    mainContainer.classList.remove("flex");
    mainContainer.classList.add("hidden");
  }
};

const checkPrevNextDisabled = () => {
  // prev
  if (parseInt(activePage?.innerText) === min) {
    if(goPrevBtn) {
      goPrevBtn.disabled = true;
    }
  } else {
    if(goPrevBtn) {
      goPrevBtn.disabled = false;
    }
  }

  // next
  if (parseInt(activePage?.innerText) === max) {
    if(goNextBtn) {
      goNextBtn.disabled = true;
    }
  } else {
    if(goNextBtn) {
      goNextBtn.disabled = false;
    }
  }
};

const changePaginationNums = (startIdx) => {
  // 1 - 9
  if (startIdx < 10 && startIdx >= min) {
    let i = 0;
    while (i < 5) {
      paginationDiv.children[i].innerText = startIdx;
      i++;
      startIdx++;
    }
    paginationDiv.children[i].replaceWith(paginationSpan);
  }
  // 10 - 16
  else if (startIdx >= 10 && startIdx <= max) {
    let tempStartIdx = startIdx;
    if (startIdx > 10) startIdx = 10;
    let i = 0;
    let tempEle = document.querySelector(".activePage");
    tempEle.classList.remove("activePage", "bg-[#FFDD00]", "border-[#FFDD00]");

    while (i < 7) {
      if (i === 5) {
        const paginationNumBtn = document.createElement("button");
        paginationNumBtn.innerText = startIdx;
        paginationNumBtn.classList =
          "w-8 h-8 sm:w-12 sm:h-12 p-2 text-xs sm:text-lg rounded-full border border-[#28303F] dark:border-white hover:bg-[#FFDD00] hover:border-[#FFDD00] hover:text-[#28303f] sm:min-w-[2.625rem]";
        paginationNumBtn.addEventListener("click", (e) => handleNumBtnClick(e));
        paginationDiv.children[i].replaceWith(paginationNumBtn);
      }
      paginationDiv.children[i].innerText = startIdx;
      i++;
      startIdx++;
    }

    activePage = paginationDiv.children[tempStartIdx - 10];
    activePage.classList.add("activePage", "bg-[#FFDD00]", "border-[#FFDD00]");
  }
};

const handleNumBtnClick = (e) => {
  changePaginationNums(e.target.innerText);
  checkPrevNextDisabled();
};

const handlePrevNextClick = (type) => {
  if (type === "prev") {
    changePaginationNums(parseInt(activePage.innerText) - 1);
    checkPrevNextDisabled();
  } else if (type === "next") {
    changePaginationNums(parseInt(activePage.innerText) + 1);
    checkPrevNextDisabled();
  }
};

const initialSetup = () => {
  // 1 (min) - 16 (max)
  const startActivePage = 1;
  createPaginationNumBtns(startActivePage);
  if (mainContainer?.classList.contains("hidden")) return;
  paginationDiv?.children[0].classList.add("activePage");
  activePage = document.querySelector(".activePage");
  activePage?.classList.add("bg-[#FFDD00]", "border-[#FFDD00]", "text-[#000]");
  checkPrevNextDisabled();
};

initialSetup();

const searchInput = document.querySelector(".search-input-wrapper");
const tabAll = document.querySelector(".tab-all");
const searchBarShow = document.querySelector(".search-bar-show");
const searchBarClose = document.querySelector(".search-bar-close");

// Show search input and hide tab when search-bar-show is clicked
searchBarShow?.addEventListener("click", () => {
  searchInput.classList.remove("search-input-visible"); // Show search input
  tabAll.classList.add("hidden"); // Hide tab-all
});

// Hide search input and show tab when search-bar-close is clicked
searchBarClose?.addEventListener("click", () => {
  searchInput.classList.add("search-input-visible"); // Hide search input
  tabAll.classList.remove("hidden"); // Show tab-all
});

const tabShowButton = document.querySelector(".tab-show");
const tabMobile = document.querySelector(".tab-mobile");

tabShowButton?.addEventListener("click", function () {
  tabMobile.classList.toggle("hidden"); // Show or hide the tab mobile block
});

// audit report
const quizButton = document.querySelector(".quize-button");
const quizForm = document.querySelector(".quize-form");

quizButton?.addEventListener("click", function() {
  quizButton?.classList.remove("block");
  quizButton?.classList.add("hidden");
  quizForm?.classList.remove("hidden");
  quizForm?.classList.add("block");
});


document.addEventListener('DOMContentLoaded', function() {
  // Get all tab buttons
  const tabButtons = document.querySelectorAll('.tab-button');

  tabButtons.forEach(function(button) {
    button.addEventListener('click', function() {
      // Hide all tab contents
      const tabContents = document.querySelectorAll('.tab-content');
      tabContents.forEach(function(content) {
        content.style.display = 'none';
      });

      // Show the content related to the clicked tab
      const tabValue = this.value;
      const activeContent = document.getElementById('content-' + tabValue);
      if (activeContent) {
        activeContent.style.display = 'block';
      }

      // Remove 'active' class from all tabs and add to the clicked tab
      tabButtons.forEach(function(btn) {
        btn.classList.remove('active');
      });
      this.classList.add('active');
    });
  });
});
