document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll('.accordion-btn').forEach(button => {
    button.addEventListener('click', () => {
      const id = button.getAttribute('data-id');
      toggleAccordion(id);
    });
  });
});

const plusSVG = `
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
    <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
  </svg>
`;

const minusSVG = `
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
    <path d="M3.75 7.25a.75.75 0 0 0 0 1.5h8.5a.75.75 0 0 0 0-1.5h-8.5Z" />
  </svg>
`;

function toggleAccordion(id) {
  const content = document.getElementById(`content-${id}`);
  const icon = document.getElementById(`icon-${id}`);

  const isOpen = content.style.maxHeight && content.style.maxHeight !== "0px";

  // Zamknij wszystkie inne akordeony (jeśli chcesz pojedyncze rozwijanie)
  document.querySelectorAll('[id^="content-"]').forEach(el => {
    el.style.maxHeight = "0px";
  });
  document.querySelectorAll('[id^="icon-"]').forEach(el => {
    el.innerHTML = plusSVG;
  });

  if (!isOpen) {
    content.style.maxHeight = content.scrollHeight + "px";
    icon.innerHTML = minusSVG;
  } else {
    content.style.maxHeight = "0px";
    icon.innerHTML = plusSVG;
  }
}
