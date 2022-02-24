setShareLinks();

function socialWindowScreen(url) {

    var left = (screen.width - 570)/2;
    var top = (screen.height - 570)/2;

    var params = "menubar=no,toolbar=no,status=no,width=570,height=570,top="+top + ",left=" + left;

    window.open(url,"NewWindow",params);
}




//
function  setShareLinks() {


    var pageUrl = encodeURIComponent(document.URL);
    var tweet = encodeURIComponent($("meta[property='og:description']").attr("content"));


    $(".social-share-url.facebook").on("click",function () {
        url = "https://www.facebook.com/sharer.php?u=https://seasave.org/10-things-you-can-do-right-now";
        socialWindowScreen(url);
    })
    $(".social-share-url.twitter").on("click",function () {
        url = "https://www.twitter.com/intent/tweet?url=https://seasave.org/get-trashy/&text=#grtTrashy";
        socialWindowScreen(url);
    })
    $(".social-share-url.linkedin").on("click",function () {
        url = "https://www.linkedin.com/shareArticle?mini=true&url=https://seasave.org/10-things-you-can-do-right-now/";
        socialWindowScreen(url);
    })
    $(".social-share-url.whatsapp").on("click",function () {
        url = "https://wa.me/?text=https://seasave.org/10-things-you-can-do-right-now";
        socialWindowScreen(url);
    })
}