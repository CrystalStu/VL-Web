var fqdnHost = window.location.host;
if(fqdnHost != "vl.cstu.gq" && fqdnHost != "localhost" && returnCitySN["cip"] != "104.238.185.128") {
    window.location.href = "https://vl.cstu.gq" + window.location.pathname;
}