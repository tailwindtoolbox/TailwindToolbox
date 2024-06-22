<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Modal with Tailwind CSS</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet" />
  <style>
    html:has(dialog[open]) {
      overflow: hidden;
    }

    @keyframes scaleDown {
      0% {
        opacity: 1;
        transform: scale(1);
      }

      100% {
        opacity: 0;
        transform: scale(0);
      }
    }

    @keyframes slideInUp {
      0% {
        opacity: 0;
        transform: translateY(20%);
      }

      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    dialog[open]::backdrop {
      backdrop-filter: blur(5px);
    }

    @media (prefers-reduced-motion: no-preference) {
      dialog {
        opacity: 0;
        transform: scale(0.9);
      }

      dialog.showing {
        animation: slideInUp 0.3s ease-out forwards;
      }

      dialog.closing {
        animation: scaleDown 0.3s ease-in forwards;
      }
    }

    .close-button {
      position: absolute;
      top: 1rem;
      right: 1rem;
      cursor: pointer;
    }
  </style>
</head>

<body class="flex items-center justify-center h-screen bg-gray-200">
  <button id="openModalButton" class="px-4 py-2 text-white bg-indigo-500 rounded">
    Open Modal
  </button>

  <dialog id="modal" class="relative p-6 bg-white rounded-lg shadow-lg">
    <button id="closeModalButtonTop" class="close-button">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-700 hover:text-gray-900" fill="none"
        viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>
    <h2 class="mb-4 text-lg font-semibold">Modal Title</h2>
    <p class="mb-4 text-gray-700">
      This is a modal dialog created using the &lt;dialog&gt; element and
      Tailwind CSS.
    </p>
    <div class="flex justify-end space-x-2">
      <button id="secondaryActionButton" class="px-4 py-2 text-white bg-gray-500 rounded">
        Secondary Action
      </button>
      <button id="closeModalButtonBottom" class="px-4 py-2 text-white bg-indigo-500 rounded">
        Close
      </button>
    </div>
  </dialog>

  <script>
    const modal = document.getElementById("modal");
    const openModalButton = document.getElementById("openModalButton");
    const closeModalButtonTop = document.getElementById(
      "closeModalButtonTop"
    );
    const closeModalButtonBottom = document.getElementById(
      "closeModalButtonBottom"
    );
    const secondaryActionButton = document.getElementById(
      "secondaryActionButton"
    );

    openModalButton.addEventListener("click", () => {
      modal.classList.remove("closing");
      modal.showModal();
      modal.classList.add("showing");
    });

    closeModalButtonTop.addEventListener("click", closeModal);
    closeModalButtonBottom.addEventListener("click", closeModal);
    secondaryActionButton.addEventListener("click", () => {
      console.log("Secondary action executed");
    });

    function closeModal() {
      modal.classList.remove("showing");
      modal.classList.add("closing");
      modal.addEventListener(
        "animationend",
        () => {
          modal.close();
          modal.classList.remove("closing");
        },
        { once: true }
      );
    }
  </script>
</body>

</html>