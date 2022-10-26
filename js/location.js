function imageGallery(){
    const highlight = document.querySelector('.gallery-highlight');
    const previews = document.querySelectorAll('.img-preview img');

    previews.forEach(preview =>{
        preview.addEventListener('click', function(){
            /*
            const smallSrc= this.src;
            const bigSrc = smallSrc.replace("small", "big");
            highlight.src = bigSrc;
            previews.forEach(preview => preview.classList.remove(".room-active"));
            preview.classList.add('room-active');
            */
           highlight.src = this.src;
           console.log(this.src);
        });
    });
}

imageGallery();