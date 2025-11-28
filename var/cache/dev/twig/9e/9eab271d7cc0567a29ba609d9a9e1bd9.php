<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* layout.html.twig */
class __TwigTemplate_831bbdf1f2333a4cc2ef0d5f3859eb80 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Example</title>
    <style>
        body {
            padding: 0;
            margin: 0;
            font-family: \"Lucida Sans Unicode\", Arial;
            font-size: 14px;
        }
    
        #site {
            margin: 0 auto;
            width: 600px;
            padding: 30px 0 0 0;
            color: #65615E;
        }
    
        h1, h2, h3 {
            font-size: 18px;
            padding: 0 0 5px 0;
            border-bottom: 1px solid #001428;
            margin-bottom: 5px;
        }
    
        h3 {
            font-size: 14px;
            padding: 15px 0 5px 0;
            margin-bottom: 5px;
            border-color: #cccccc;
        }
    
        img {
            border: 0;
        }
    
        p {
            padding: 0 0 5px 0;
        }
    
        a {
            color: #000;
        }
    
        #logo {
            text-align: center;
            padding: 50px 0;
        }
    
        #logo hr {
            display: block;
            height: 1px;
            overflow: hidden;
            background: #BBB;
            border: 0;
            padding: 0;
            margin: 30px 0 20px 0;
        }
    
        .claim {
            text-transform: uppercase;
            color: #BBB;
        }
    
        #site ul {
            padding: 10px 0 10px 20px;
            list-style: circle;
        }
    
        .buttons {
            margin-bottom: 100px;
            text-align: center;
        }
    
        .buttons a {
            display: inline-block;
            background: #6428b4;
            color: #fff;
            padding: 5px 10px;
            margin-right: 10px;
            width: 40%;
            border-radius: 2px;
            text-decoration: none;
        }
    
        .buttons a:hover {
            background: #1C8BC1;
        }
    
        .buttons a:last-child {
            margin: 0;
        }
    
    </style>
</head>
<body>
    <div id=\"site\">
        <div id=\"logo\">
            <a href=\"http://www.pimcore.com/\"><img src=\"/bundles/pimcoreadmin/img/logo-claim-gray.svg\"
                                                   style=\"width: 400px;\"/></a>
            <hr/>
        </div>
        ";
        // line 105
        yield from         $this->unwrap()->yieldBlock("content", $context, $blocks);
        yield "
    </div>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  156 => 105,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Example</title>
    <style>
        body {
            padding: 0;
            margin: 0;
            font-family: \"Lucida Sans Unicode\", Arial;
            font-size: 14px;
        }
    
        #site {
            margin: 0 auto;
            width: 600px;
            padding: 30px 0 0 0;
            color: #65615E;
        }
    
        h1, h2, h3 {
            font-size: 18px;
            padding: 0 0 5px 0;
            border-bottom: 1px solid #001428;
            margin-bottom: 5px;
        }
    
        h3 {
            font-size: 14px;
            padding: 15px 0 5px 0;
            margin-bottom: 5px;
            border-color: #cccccc;
        }
    
        img {
            border: 0;
        }
    
        p {
            padding: 0 0 5px 0;
        }
    
        a {
            color: #000;
        }
    
        #logo {
            text-align: center;
            padding: 50px 0;
        }
    
        #logo hr {
            display: block;
            height: 1px;
            overflow: hidden;
            background: #BBB;
            border: 0;
            padding: 0;
            margin: 30px 0 20px 0;
        }
    
        .claim {
            text-transform: uppercase;
            color: #BBB;
        }
    
        #site ul {
            padding: 10px 0 10px 20px;
            list-style: circle;
        }
    
        .buttons {
            margin-bottom: 100px;
            text-align: center;
        }
    
        .buttons a {
            display: inline-block;
            background: #6428b4;
            color: #fff;
            padding: 5px 10px;
            margin-right: 10px;
            width: 40%;
            border-radius: 2px;
            text-decoration: none;
        }
    
        .buttons a:hover {
            background: #1C8BC1;
        }
    
        .buttons a:last-child {
            margin: 0;
        }
    
    </style>
</head>
<body>
    <div id=\"site\">
        <div id=\"logo\">
            <a href=\"http://www.pimcore.com/\"><img src=\"/bundles/pimcoreadmin/img/logo-claim-gray.svg\"
                                                   style=\"width: 400px;\"/></a>
            <hr/>
        </div>
        {{ block('content') }}
    </div>
</body>
</html>
", "layout.html.twig", "/home/batpot/skeleton-project/templates/layout.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = [];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
