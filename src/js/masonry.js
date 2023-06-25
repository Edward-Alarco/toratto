import { MasonryGrid, JustifiedGrid, FrameGrid, PackingGrid } from "@egjs/grid";
// import GLightbox from './glightbox';

(function(){

    if(document.querySelector('.masonry')){
        new JustifiedGrid(".masonry", {
            defaultDirection: "start",
            gap: 10,
            rowRange: 0,
            columnRange: [1,4],
            sizeRange: [200,1000],
            isCroppedSize: false,
            displayedRow: -1,
        }).renderItems();
    }

})();