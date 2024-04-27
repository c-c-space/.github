'use strict'

if (!/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
    forPC()
    console.log("This is a not Mobile Device")
} else {
    forMobile()
    console.log("Mobile Detected")
}

var isMobile = {
    Android: function () {
        return navigator.userAgent.match(/Android/i)
    },
    BlackBerry: function () {
        return navigator.userAgent.match(/BlackBerry/i)
    },
    iOS: function () {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i)
    },
    Opera: function () {
        return navigator.userAgent.match(/Opera Mini/i)
    },
    Windows: function () {
        return navigator.userAgent.match(/IEMobile/i)
    },
    any: function () {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows())
    }
};

if (isMobile.any()) {
    forMobile()
    console.log("This is a Mobile Device")
}

var iOS = (navigator.userAgent.match(/(iPad|iPhone|iPod)/g) ? true : false)
if (iOS) {
    forMobile()
    console.log('This is a iPad|iPhone|iPod')
}