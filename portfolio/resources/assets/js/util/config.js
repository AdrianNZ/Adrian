/**
 * Created by Adrian on 20/12월/16.
 */

var ajaxConfig = function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        },
    });
};


//모듈화 app.js 로 던지는..

module.exports.ajaxConfig = ajaxConfig;