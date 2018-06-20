$( document ).ready(function() {
    
     $('.navbar a').click(function() {
        //Save the ID of the clicked Element in ourClass
        $(this).addClase('active');
        // //remove active from all filterOptions li
        // $('#filterOptions li').removeClass('active');
        // //Add .active to the clicked Element
        // $(this).parent().addClass('active');
        // //if Element with ID all was clicked all mediaRow Divs are shown
     });
});