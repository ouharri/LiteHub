let flag = true;

$("#menu-toggle").click(async () => {
    const toggleMain = flag && await $('.main').toggleClass('active', 100);
    await $("#left-sidebar").stop().slideToggle('normal', () => {
        $("#left-sidebar").css('display', '').toggleClass('block hidden active');
        flag = !flag;
    }).promise().then(() => {
        !toggleMain && $('.main').toggleClass('active', 100);
    });
});
