export default (() => {

    const tableSection = document.querySelector('.table');
  
    tableSection?.addEventListener('click', async (event) => {
  
        if (event.target.closest('.filter-button')) {
            document.querySelector('.filter').classList.add('active')
        }
      
    });
  })();