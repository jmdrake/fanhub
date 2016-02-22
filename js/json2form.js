function json2form(div, record, href) {
    for(var key in record) {
        element = div.find("#" + key);
        var value = unescape(record[key]);        
        if(element.get(0) != undefined)
            switch(element.get(0).tagName){
                case "INPUT":
                    element.val(value);
                    break;
                case "DIV":
                    element.html(value);
                    break;
                case "SPAN":
                    element.html(value);
                    break;
                case "IMG":
                    if(value != "")
                        element.attr("src", href + record[key]);
                    break;
            }
    }    
}