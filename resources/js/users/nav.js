let flag = true;

$("#menu-toggle").click(async () => {
    await $('#Logo').toggleClass('hidden');
    const toggleMain = flag && await $('.main').toggleClass('active', 500);
    await $("#left-sidebar").stop().slideToggle(600,'linear',async () => {
        flag = !flag;
        $("#left-sidebar").css('display', '').toggleClass('block hidden active');
    }).promise().then(() => {
        !toggleMain && $('.main').toggleClass('active', 100);
    });
});
