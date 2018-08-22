<!DOCTYPE html>
<html lang="{$CurrentLocale.Lang}">
<head>
    {asset name="Head"}
</head>
<body id="{$BodyID}" class="{$BodyClass}">
<div id="Frame">
    <div role="banner" class="Banner">
        <div class="Row">
            <strong class="SiteTitle"><a href="https://biohack.me">{logo}</a></strong>
        </div>
    </div>
    <div id="Head" role="navigation">
        <div class="Row">
            <div class="SiteSearch" role="search">{searchbox}</div>
            <ul class="SiteMenu">
                {dashboard_link}
                {discussions_link}
                {activity_link}
                {inbox_link}
                {custom_menu}
                {profile_link}
                {signinout_link}
            </ul>
        </div>
    </div>
    <div class="BreadcrumbsWrapper">
        <div class="Row">
        </div>
    </div>
    <div id="Body">
        <div class="Row">
            <div role="complementary" class="Column PanelColumn" id="Panel">
                {module name="MeModule"}
                {asset name="Panel"}
            </div>
            <div class="Column ContentColumn" id="Content" role="main">{asset name="Content"}</div>
        </div>
    </div>
    <div id="Foot" role="contentinfo">
        <div class="Row">
            <a href="{vanillaurl}" class="PoweredByVanilla">Powered by Vanilla</a>
            {asset name="Foot"}
        </div>
    </div>
</div>
{event name="AfterBody"}
</body>
</html>
