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

/* bricks/image_brick.html.twig */
class __TwigTemplate_b886f454c873be3d398f943ef9cb1dbb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bricks/image_brick.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bricks/image_brick.html.twig"));

        // line 1
        yield "<div class=\"brick image-brick\">
  ";
        // line 2
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["brick"]) || array_key_exists("brick", $context) ? $context["brick"] : (function () { throw new RuntimeError('Variable "brick" does not exist.', 2, $this->source); })()), "image", [], "any", false, false, true, 2)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 3
            yield "    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["brick"]) || array_key_exists("brick", $context) ? $context["brick"] : (function () { throw new RuntimeError('Variable "brick" does not exist.', 3, $this->source); })()), "image", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["brick"] ?? null), "caption", [], "any", true, true, true, 3)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["brick"]) || array_key_exists("brick", $context) ? $context["brick"] : (function () { throw new RuntimeError('Variable "brick" does not exist.', 3, $this->source); })()), "caption", [], "any", false, false, true, 3), 3, $this->source), "Image")) : ("Image")), "html", null, true);
            yield "\">
  ";
        } else {
            // line 5
            yield "    <img src=\"https://via.placeholder.com/450x250\" alt=\"Placeholder\">
  ";
        }
        // line 7
        yield "  <figcaption>
    <h2>";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["brick"] ?? null), "title", [], "any", true, true, true, 8)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["brick"]) || array_key_exists("brick", $context) ? $context["brick"] : (function () { throw new RuntimeError('Variable "brick" does not exist.', 8, $this->source); })()), "title", [], "any", false, false, true, 8), 8, $this->source), "Indonectetus facilis leo nibh")) : ("Indonectetus facilis leo nibh")), "html", null, true);
        yield "</h2>
    <p>";
        // line 9
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["brick"] ?? null), "content", [], "any", true, true, true, 9)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["brick"]) || array_key_exists("brick", $context) ? $context["brick"] : (function () { throw new RuntimeError('Variable "brick" does not exist.', 9, $this->source); })()), "content", [], "any", false, false, true, 9), 9, $this->source), "This is some intro text...")) : ("This is some intro text..."));
        yield "</p>
    ";
        // line 10
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["brick"]) || array_key_exists("brick", $context) ? $context["brick"] : (function () { throw new RuntimeError('Variable "brick" does not exist.', 10, $this->source); })()), "more", [], "any", false, false, true, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<footer class=\"more\"><a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["brick"]) || array_key_exists("brick", $context) ? $context["brick"] : (function () { throw new RuntimeError('Variable "brick" does not exist.', 10, $this->source); })()), "more", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            yield "\">Read More &raquo;</a></footer>";
        }
        // line 11
        yield "  </figcaption>
</div>
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
        return "bricks/image_brick.html.twig";
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
        return array (  84 => 11,  78 => 10,  74 => 9,  70 => 8,  67 => 7,  63 => 5,  55 => 3,  53 => 2,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"brick image-brick\">
  {% if brick.image %}
    <img src=\"{{ brick.image }}\" alt=\"{{ brick.caption|default('Image') }}\">
  {% else %}
    <img src=\"https://via.placeholder.com/450x250\" alt=\"Placeholder\">
  {% endif %}
  <figcaption>
    <h2>{{ brick.title|default('Indonectetus facilis leo nibh') }}</h2>
    <p>{{ brick.content|default('This is some intro text...')|raw }}</p>
    {% if brick.more %}<footer class=\"more\"><a href=\"{{ brick.more }}\">Read More &raquo;</a></footer>{% endif %}
  </figcaption>
</div>
", "bricks/image_brick.html.twig", "/home/batpot/skeleton-project/templates/bricks/image_brick.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 2];
        static $filters = ["escape" => 3, "default" => 3, "raw" => 9];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
