(function($,window,document) {

    $(function() { 
		// Merge de funções ao objeto jQuery
		$.fn.extend({
            main:
                function(){
                    return this.each(function(){
                        $(document).login();
                    });
                },
            login:
                function(){
                    return this.each(function(){
                        $("#conteudo").load("interface/login.php");
                    });
                }
       
        });
    $(document).main();           

    });






}(window.jQuery,window,document));