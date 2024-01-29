'use strict'

// ダイアログの開閉 (/ver/css/modal.css と併用)

document.addEventListener('DOMContentLoaded', function () {
    const dialogModal = document.querySelector('#modal')
    const closeModal = document.querySelector('#closeModal')
    closeModal.addEventListener('click', () => {
        dialogModal.close()
    })
});

function openModal() {
    const dialogModal = document.querySelector('#modal')
    if (typeof dialogModal.showModal === "function") {
        dialogModal.showModal()
    } else {
        alert("The <dialog> API is not supported by this browser")
    }
}