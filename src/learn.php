<div class="c content ">
<h1>Learning resources</h1>
    <div class="card">
        <div class="card-header">
	   <h2><a href="./tutorials.html">Tutorials</a></h2>
	   <span class="chevron-icon">></span>
        </div>
        <div class="card-content">
	   <p>The <a href="./tutorials.html">tutorials page</a> contains a list of interactive <a href="https://colab.research.google.com/">google colab</a> notebooks that provide detailed walkthroughs of ways to use Water Prediction Node data products as well links to other pages on this site where topics related to remote sensing and hydrological forecasting are discussed. The tutorials are a great way to quickly learn how to download and begin analyzing the data in the <a href="/catalog/">data catalog</a>. </p>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
 	    <h2><a href=#>Data Guide (Coming soon)</a></h2>
            <span class="chevron-icon">></span>
        </div>
        <div class="card-content">
  	    <p>The data guide will provide an in-depth overview of the data available in the data catalog.</p>
        </div>
    </div>


</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    var startExpanded = true; // Set this to true if you want cards to start expanded
    var cards = document.querySelectorAll('.card');

    cards.forEach((card) => {
        // Function to get the total height of the card's content for expansion
        function getContentHeight(cardElement) {
            let totalHeight = 0;
            // Include the height of each child (direct descendants only)
            Array.from(cardElement.children).forEach(child => {
                totalHeight += child.scrollHeight;
            });
            return totalHeight;
        }

        let header = card.querySelector('.card-header');
        let contentHeight = getContentHeight(card); // Get total content height for expansion
        let initialHeight = header.scrollHeight + 8 + 'px'; // Height of the header

        // Set initial height based on whether the card should start expanded or not
        card.style.height = startExpanded ? contentHeight + 'px' : initialHeight;

        // Set initial state of the chevron and card
        card.classList.toggle('is-expanded', startExpanded);
        let chevron = card.querySelector('.chevron-icon');
        chevron.style.transform = startExpanded ? 'rotate(90deg)' : 'rotate(-90deg)';

        card.addEventListener('click', function() {
            let isExpanded = this.classList.contains('is-expanded');

            // Toggle the height and chevron direction
            if (isExpanded) {
                this.style.height = initialHeight;
                chevron.style.transform = 'rotate(-90deg)';
                this.classList.remove('is-expanded');
            } else {
                this.style.height = contentHeight + 'px';
                chevron.style.transform = 'rotate(90deg)';
                this.classList.add('is-expanded');
            }
        });
    });
});
</script>
