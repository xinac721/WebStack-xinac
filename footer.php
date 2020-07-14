<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<!-- Main Footer -->
<!-- Choose between footer styles: "footer-type-1" or "footer-type-2" -->
<!-- Add class "sticky" to  always stick the footer to the end of page (if page contents is small) -->
<!-- Or class "fixed" to  always fix the footer to the end of page -->
<footer class="main-footer sticky footer-type-1">
    <div class="footer-inner">
        <!-- Add your copyright text here -->
        <div class="footer-text">
            &copy; <?php echo date('Y'); ?>&nbsp;<?php $this->options->xinac_copy(); ?>
            &nbsp;&nbsp;Design By <a href="http://viggoz.com" target="_blank">Viggo</a>
            &nbsp;&nbsp;<a href="http://beian.miit.gov.cn/" target="_blank"><?php $this->options->xinac_beian(); ?></a>
        </div>
        <!-- Go to Top Link, just add rel="go-top" to any link to add this functionality -->
        <div class="go-up">
            <a href="#" rel="go-top">
                <i class="fa-angle-up"></i>
            </a>
        </div>
        <!--页脚自定义代码-->
        <div class="footer-text" style="margin-left: 15px;">
            <?php $this->options->xinac_foot(); ?>
        </div>
    </div>
</footer>
</div>
</div>
<!-- 锚点平滑移动 -->
<script type="text/javascript">
    $(document).ready(function () {
        //img lazy loaded
        const observer = lozad();
        observer.observe();

        $(document).on('click', '.has-sub', function () {
            var _this = $(this)
            if (!$(this).hasClass('expanded')) {
                setTimeout(function () {
                    _this.find('ul').attr("style", "")
                }, 300);

            } else {
                $('.has-sub ul').each(function (id, ele) {
                    var _that = $(this)
                    if (_this.find('ul')[0] != ele) {
                        setTimeout(function () {
                            _that.attr("style", "")
                        }, 300);
                    }
                })
            }
        })
        $('.user-info-menu .hidden-sm').click(function () {
            if ($('.sidebar-menu').hasClass('collapsed')) {
                $('.has-sub.expanded > ul').attr("style", "")
            } else {
                $('.has-sub.expanded > ul').show()
            }
        })
        $("#main-menu li ul li").click(function () {
            $(this).siblings('li').removeClass('active'); // 删除其他兄弟元素的样式
            $(this).addClass('active'); // 添加当前元素的样式
        });
        $("a.smooth").click(function (ev) {
            ev.preventDefault();

            public_vars.$mainMenu.add(public_vars.$sidebarProfile).toggleClass('mobile-is-visible');
            ps_destroy();
            $("html, body").animate({
                scrollTop: $($(this).attr("href")).offset().top - 30
            }, {
                duration: 500,
                easing: "swing"
            });
        });
        return false;
    });

    var href = "";
    var pos = 0;
    $("a.smooth").click(function (e) {
        $("#main-menu li").each(function () {
            $(this).removeClass("active");
        });
        $(this).parent("li").addClass("active");
        e.preventDefault();
        href = $(this).attr("href");
        pos = $(href).position().top - 30;
    });
</script>
<!-- Bottom Scripts -->
<script src="<?php $this->options->themeUrl('assets/js/bootstrap.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('assets/js/TweenMax.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('assets/js/resizeable.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('assets/js/joinable.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('assets/js/xenon-api.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('assets/js/xenon-toggles.js'); ?>"></script>
<!-- JavaScripts initializations and stuff -->
<script src="<?php $this->options->themeUrl('assets/js/xenon-custom.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('assets/js/lozad.js'); ?>"></script>
</body>

</html>