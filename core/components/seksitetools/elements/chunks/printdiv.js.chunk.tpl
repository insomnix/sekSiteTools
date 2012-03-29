<script type="text/javascript">
    function printSelection(node){
        var content=node.innerHTML
        var pwin=window.open('','print_content','width=[[+width]],height=[[+height]]');
        pwin.document.open();
        pwin.document.write('<html><head><link href="[[+cssFile]]" rel="stylesheet" type="text/css" /></head><body class="popup" onload="window.print()">'+content+'</body></html>');
        pwin.document.close();
        setTimeout(function(){pwin.close();},1000);
    }
</script>