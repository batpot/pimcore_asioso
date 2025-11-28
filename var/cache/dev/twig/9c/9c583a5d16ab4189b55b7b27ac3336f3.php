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

/* pages/base.html.twig */
class __TwigTemplate_5a31014ce42cf0870ba6720dd3d16e7a extends Template
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
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["document"] ?? null), "getTitle", [], "method", true, true, true, 5)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 5, $this->source); })()), "getTitle", [], "method", false, false, true, 5), 5, $this->source), "Homepage")) : ("Homepage")), "html", null, true);
        yield "</title>
</head>
<body>

    ";
        // line 10
        yield "    ";
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 13
        yield "
    ";
        // line 15
        yield "    <main>
";
        // line 16
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 38
        yield "


    </main>

    ";
        // line 44
        yield "    ";
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 47
        yield "
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 11
        yield "        ";
        yield from $this->load("snippets/header.html.twig", 11)->unwrap()->yield($context);
        // line 12
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 17
        yield "    <div class=\"page-content\">
        ";
        // line 18
        if ((($tmp = (isset($context["bricks"]) || array_key_exists("bricks", $context) ? $context["bricks"] : (function () { throw new RuntimeError('Variable "bricks" does not exist.', 18, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 19
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["bricks"]) || array_key_exists("bricks", $context) ? $context["bricks"] : (function () { throw new RuntimeError('Variable "bricks" does not exist.', 19, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["brick"]) {
                // line 20
                yield "                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["brick"], "type", [], "any", false, false, true, 20) == "text")) {
                    // line 21
                    yield "                    <div class=\"brick text-brick\">
                        ";
                    // line 22
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["brick"], "content", [], "any", true, true, true, 22)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["brick"], "content", [], "any", false, false, true, 22), 22, $this->source), "Default text")) : ("Default text"));
                    yield "
                    </div>
                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 24
$context["brick"], "type", [], "any", false, false, true, 24) == "image")) {
                    // line 25
                    yield "                    <div class=\"brick image-brick\">
                        ";
                    // line 26
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["brick"], "image", [], "any", false, false, true, 26)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 27
                        yield "                            <img src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["brick"], "image", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
                        yield "\" alt=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["brick"], "caption", [], "any", true, true, true, 27)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["brick"], "caption", [], "any", false, false, true, 27), 27, $this->source), "Image")) : ("Image")), "html", null, true);
                        yield "\">
                        ";
                    } else {
                        // line 29
                        yield "                            <img src=\"https://via.placeholder.com/150\" alt=\"Placeholder\">
                        ";
                    }
                    // line 31
                    yield "                        <p>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["brick"], "caption", [], "any", true, true, true, 31)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["brick"], "caption", [], "any", false, false, true, 31), 31, $this->source), "Add a caption")) : ("Add a caption")), "html", null, true);
                    yield "</p>
                    </div>
                ";
                }
                // line 34
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['brick'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            yield "        ";
        }
        // line 36
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 44
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 45
        yield "        ";
        yield from $this->load("snippets/footer.html.twig", 45)->unwrap()->yield($context);
        // line 46
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/base.html.twig";
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
        return array (  225 => 46,  222 => 45,  209 => 44,  197 => 36,  194 => 35,  188 => 34,  181 => 31,  177 => 29,  169 => 27,  167 => 26,  164 => 25,  162 => 24,  157 => 22,  154 => 21,  151 => 20,  146 => 19,  144 => 18,  141 => 17,  128 => 16,  117 => 12,  114 => 11,  101 => 10,  87 => 47,  84 => 44,  77 => 38,  75 => 16,  72 => 15,  69 => 13,  66 => 10,  59 => 5,  53 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>{{ document.getTitle()|default('Homepage') }}</title>
</head>
<body>

    {# Header block #}
    {% block header %}
        {% include 'snippets/header.html.twig' %}
    {% endblock %}

    {# Main content block #}
    <main>
{% block content %}
    <div class=\"page-content\">
        {% if bricks %}
            {% for brick in bricks %}
                {% if brick.type == 'text' %}
                    <div class=\"brick text-brick\">
                        {{ brick.content|default('Default text')|raw }}
                    </div>
                {% elseif brick.type == 'image' %}
                    <div class=\"brick image-brick\">
                        {% if brick.image %}
                            <img src=\"{{ brick.image }}\" alt=\"{{ brick.caption|default('Image') }}\">
                        {% else %}
                            <img src=\"https://via.placeholder.com/150\" alt=\"Placeholder\">
                        {% endif %}
                        <p>{{ brick.caption|default('Add a caption') }}</p>
                    </div>
                {% endif %}
            {% endfor %}
        {% endif %}
    </div>
{% endblock %}



    </main>

    {# Footer block #}
    {% block footer %}
        {% include 'snippets/footer.html.twig' %}
    {% endblock %}

</body>
</html>
", "pages/base.html.twig", "/var/www/html/templates/pages/base.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["block" => 10, "include" => 11, "if" => 18, "for" => 19];
        static $filters = ["escape" => 5, "default" => 5, "raw" => 22];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'include', 'if', 'for'],
                ['escape', 'default', 'raw'],
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
