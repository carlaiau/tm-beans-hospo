(function($){
    $(document).ready(function(){
        var myType = new TypeIt('.typed-element', {
            strings: header_strings,
            breakLines: false,
            autoStart: false,
            loop: true,
            speed: 100,
            deleteSpeed: 50,
            nextStringDelay: [500, 1500]
        });
        myType.init();
    });
})(jQuery);
