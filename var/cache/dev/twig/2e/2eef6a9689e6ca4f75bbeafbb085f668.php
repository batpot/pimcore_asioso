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
class __TwigTemplate_e861efde9c1ff30e1ff958eb36ac2d15 extends Template
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
  <title>";
        // line 5
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["document"] ?? null), "title", [], "any", true, true, true, 5) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 5, $this->source); })()), "title", [], "any", false, false, true, 5)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 5, $this->source); })()), "title", [], "any", false, false, true, 5), 5, $this->source), "html", null, true)) : ("asioso test template"));
        yield "</title>

  <link rel=\"stylesheet\" href=\"/static/css/layout.css\">

  <!--[if lt IE 9]>
        <script src=\"/static/js/html5shiv.js\"></script>
  <![endif]-->
</head>

<body>

  <div class=\"wrapper row1\">
    ";
        // line 17
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 20
        yield "  </div>

  <div class=\"wrapper row2\">
    <div id=\"container\" class=\"clear\">

      ";
        // line 26
        yield "      <section id=\"slider\">
        ";
        // line 27
        if ((array_key_exists("slider_image", $context) && (isset($context["slider_image"]) || array_key_exists("slider_image", $context) ? $context["slider_image"] : (function () { throw new RuntimeError('Variable "slider_image" does not exist.', 27, $this->source); })()))) {
            // line 28
            yield "        <a href=\"#\"><img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed((isset($context["slider_image"]) || array_key_exists("slider_image", $context) ? $context["slider_image"] : (function () { throw new RuntimeError('Variable "slider_image" does not exist.', 28, $this->source); })()), 28, $this->source), "html", null, true);
            yield "\" alt=\"\"></a>
        ";
        } else {
            // line 30
            yield "        <a href=\"#\"><img src=\"src=\" /static/images/960x360.gif\" alt=\"\"></a>
        ";
        }
        // line 32
        yield "      </section>

      <main id=\"homepage\" role=\"main\">
        ";
        // line 36
        yield "        ";
        yield from $this->load("snippets/hero.html.twig", 36)->unwrap()->yield($context);
        // line 37
        yield "
        ";
        // line 39
        yield "        <section id=\"services\" class=\"clear\">
          ";
        // line 40
        yield $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "block", "services", ["allowed" => ["textBrick", "imageBrick"]]);
        // line 42
        yield "
        </section>

        ";
        // line 46
        yield "        <section id=\"intro\" class=\"last clear\">
          ";
        // line 47
        yield $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "block", "intro", ["allowed" => ["imageBrick", "textBrick"]]);
        // line 49
        yield "
        </section>


        ";
        // line 53
        if ((($tmp = (isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 53, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 54
            yield "          <h2>Main Content</h2>
        ";
        }
        // line 56
        yield "
        ";
        // line 57
        yield $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "wysiwyg", "mainContent");
        yield "

      </main>

    </div>
  </div>

  <div class=\"wrapper row3\">
    ";
        // line 65
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 68
        yield "  </div>

</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 17
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

        // line 18
        yield "    ";
        yield from $this->load("snippets/header.html.twig", 18)->unwrap()->yield($context);
        // line 19
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 65
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

        // line 66
        yield "    ";
        yield from $this->load("snippets/footer.html.twig", 66)->unwrap()->yield($context);
        // line 67
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
        return array (  209 => 67,  206 => 66,  193 => 65,  182 => 19,  179 => 18,  166 => 17,  151 => 68,  149 => 65,  138 => 57,  135 => 56,  131 => 54,  129 => 53,  123 => 49,  121 => 47,  118 => 46,  113 => 42,  111 => 40,  108 => 39,  105 => 37,  102 => 36,  97 => 32,  93 => 30,  87 => 28,  85 => 27,  82 => 26,  75 => 20,  73 => 17,  58 => 5,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
  <title>{{ document.title ?? 'asioso test template' }}</title>

  <link rel=\"stylesheet\" href=\"/static/css/layout.css\">

  <!--[if lt IE 9]>
        <script src=\"/static/js/html5shiv.js\"></script>
  <![endif]-->
</head>

<body>

  <div class=\"wrapper row1\">
    {% block header %}
    {% include 'snippets/header.html.twig' %}
    {% endblock %}
  </div>

  <div class=\"wrapper row2\">
    <div id=\"container\" class=\"clear\">

      {# Slider (simple) #}
      <section id=\"slider\">
        {% if slider_image is defined and slider_image %}
        <a href=\"#\"><img src=\"{{ slider_image }}\" alt=\"\"></a>
        {% else %}
        <a href=\"#\"><img src=\"src=\" /static/images/960x360.gif\" alt=\"\"></a>
        {% endif %}
      </section>

      <main id=\"homepage\" role=\"main\">
        {# Include the hero teaser snippet #}
        {% include 'snippets/hero.html.twig' %}

        {# services / bricks loop #}
        <section id=\"services\" class=\"clear\">
          {{ pimcore_block('services', {
          'allowed': ['textBrick', 'imageBrick']
           }) }}
        </section>

        {# intro area (render first intro-type brick if any) #}
        <section id=\"intro\" class=\"last clear\">
          {{ pimcore_block('intro', {
          'allowed': ['imageBrick', 'textBrick']
          }) }}
        </section>


        {% if editmode %}
          <h2>Main Content</h2>
        {% endif %}

        {{ pimcore_wysiwyg('mainContent') }}

      </main>

    </div>
  </div>

  <div class=\"wrapper row3\">
    {% block footer %}
    {% include 'snippets/footer.html.twig' %}
    {% endblock %}
  </div>

</body>

</html>", "pages/base.html.twig", "/var/www/html/templates/pages/base.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["block" => 17, "if" => 27, "include" => 36];
        static $filters = ["escape" => 5];
        static $functions = ["pimcore_block" => 40, "pimcore_wysiwyg" => 57];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if', 'include'],
                ['escape'],
                ['pimcore_block', 'pimcore_wysiwyg'],
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
