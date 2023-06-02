$(document).ready(function () {
    $("#register-patients").click(function () {

        $("#register-patients-form").show();

    });
    $("#cut-form-button").click(function () {

        $("#register-patients-form").hide();

    });
    $(".cut-form").click(function () {

        $(".view-patients").hide();

    });
    $("#view-patients-records").click(function () {

        $(".view-patients").show();

    });






})