function btnSearch() {
    var searchstr = $("#search").val();
    search(searchstr, function(userList){
        populateList($("#lstSearch"), userList, $("#tmplUser"), function (div, record) {
            div.find("a").attr("href", "index.html?user=" + record["userid"]);
        }, "./uploads/");        
    })
}