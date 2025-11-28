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

/* snippets/header.html.twig */
class __TwigTemplate_c095b5ef3fdc37f35d4b33479784d1fc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "snippets/header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "snippets/header.html.twig"));

        // line 1
        yield "<header class=\"site-header\">
  <div class=\"container\">
    <!--<div id=\"hgroup\">
      <h1><a href=\"";
        // line 4
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        yield "\">Company Logo</a></h1>
      <h2>HTML5 Website Template</h2>
    </div>-->

     ";
        // line 9
        yield "      <div class=\"col-12 col-md\">
          <a class=\"text-dark text-decoration-none\" href=\"/\">
              <img id=\"logo-footer\" src=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/static/images/logo.png"), "html", null, true);
        yield "\" alt=\"Logo\" width=\"100\" height=\"auto\">
          </a>
      </div>

    <nav class=\"main-nav\">
      <ul>
        <li><a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        yield "\">Home</a></li>

        ";
        // line 20
        yield "        ";
        $context["root"] = (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 20, $this->source); })());
        // line 21
        yield "        ";
        if ((($tmp = (isset($context["root"]) || array_key_exists("root", $context) ? $context["root"] : (function () { throw new RuntimeError('Variable "root" does not exist.', 21, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 22
            yield "          ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["root"]) || array_key_exists("root", $context) ? $context["root"] : (function () { throw new RuntimeError('Variable "root" does not exist.', 22, $this->source); })()), "getChildren", [], "method", false, false, true, 22));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 23
                yield "            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["page"], "published", [], "any", false, false, true, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 24
                    yield "              <li><a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["page"], "getRealFullPath", [], "method", false, false, true, 24), 24, $this->source), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["page"], "getKey", [], "method", false, false, true, 24), 24, $this->source)), "html", null, true);
                    yield "</a></li>
            ";
                }
                // line 26
                yield "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            yield "        ";
        }
        // line 28
        yield "      </ul>
    </nav>
  </div>
</header>
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
        return "snippets/header.html.twig";
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
        return array (  111 => 28,  108 => 27,  102 => 26,  94 => 24,  91 => 23,  86 => 22,  83 => 21,  80 => 20,  75 => 17,  66 => 11,  62 => 9,  55 => 4,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<header class=\"site-header\">
  <div class=\"container\">
    <!--<div id=\"hgroup\">
      <h1><a href=\"{{ path('homepage') }}\">Company Logo</a></h1>
      <h2>HTML5 Website Template</h2>
    </div>-->

     {# Logo & copyright #}
      <div class=\"col-12 col-md\">
          <a class=\"text-dark text-decoration-none\" href=\"/\">
              <img id=\"logo-footer\" src=\"{{ asset('/static/images/logo.png') }}\" alt=\"Logo\" width=\"100\" height=\"auto\">
          </a>
      </div>

    <nav class=\"main-nav\">
      <ul>
        <li><a href=\"{{ path('homepage') }}\">Home</a></li>

        {# list children of root (if any) #}
        {% set root = document %}
        {% if root %}
          {% for page in root.getChildren() %}
            {% if page.published %}
              <li><a href=\"{{ page.getRealFullPath() }}\">{{ page.getKey()|capitalize }}</a></li>
            {% endif %}
          {% endfor %}
        {% endif %}
      </ul>
    </nav>
  </div>
</header>
", "snippets/header.html.twig", "/home/batpot/skeleton-project/templates/snippets/header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 20, "if" => 21, "for" => 22];
        static $filters = ["escape" => 11, "capitalize" => 24];
        static $functions = ["path" => 4, "asset" => 11];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape', 'capitalize'],
                ['path', 'asset'],
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
