function toggleSidebar() {
    console.log("toggling", $("#sidebar-container"))
    $("#sidebar-container").toggleClass("show");
}

$(function(){
    var current = location.pathname;
    $('#left-menu-bar a').each(function(){
        var $this = $(this);
        console.log($this, $this.attr('href'));
        // if the current path is like this link, make it active
        if(current.indexOf($this.attr('href')) !== -1){
            $this.addClass('active');
        }
    })
})