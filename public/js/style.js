$( document ).ready(function() {

    $('.cs-select ul li').click(function (){
        var moyen = $(this).data("value");

        if(moyen === 'Passager piéton' || moyen === 'Vélo' || moyen === 'Moto') {
            $('#markpart').removeClass('hidden').addClass('hidden');
        }else {
            $('#markpart').removeClass('hidden');
        }
    });
});
