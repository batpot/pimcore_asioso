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
class __TwigTemplate_d035bb21af63cf895313724daaa392ad extends Template
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
        yield "<header>
    <nav>
        <ul>
            ";
        // line 5
        yield "            <li><a href=\"/\">Home</a></li>

            ";
        // line 8
        yield "            ";
        $context["root"] = Pimcore\Model\Document::getById("/");
        // line 9
        yield "            ";
        if ((($tmp = (isset($context["root"]) || array_key_exists("root", $context) ? $context["root"] : (function () { throw new RuntimeError('Variable "root" does not exist.', 9, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 10
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["root"]) || array_key_exists("root", $context) ? $context["root"] : (function () { throw new RuntimeError('Variable "root" does not exist.', 10, $this->source); })()), "getChildren", [], "method", false, false, true, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 11
                yield "                    ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["page"], "published", [], "any", false, false, true, 11)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 12
                    yield "                        <li><a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["page"], "getRealFullPath", [], "method", false, false, true, 12), 12, $this->source), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["page"], "getKey", [], "method", false, false, true, 12), 12, $this->source)), "html", null, true);
                    yield "</a></li>
                    ";
                }
                // line 14
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            yield "            ";
        }
        // line 16
        yield "        </ul>
    </nav>
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
        return array (  90 => 16,  87 => 15,  81 => 14,  73 => 12,  70 => 11,  65 => 10,  62 => 9,  59 => 8,  55 => 5,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<header>
    <nav>
        <ul>
            {# Always show Home link #}
            <li><a href=\"/\">Home</a></li>

            {# Loop through children of root / homepage #}
            {% set root = pimcore_document('/') %}
            {% if root %}
                {% for page in root.getChildren() %}
                    {% if page.published %}
                        <li><a href=\"{{ page.getRealFullPath() }}\">{{ page.getKey()|capitalize }}</a></li>
                    {% endif %}
                {% endfor %}
            {% endif %}
        </ul>
    </nav>
</header>
", "snippets/header.html.twig", "/var/www/html/templates/snippets/header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 8, "if" => 9, "for" => 10];
        static $filters = ["escape" => 12, "capitalize" => 12];
        static $functions = ["pimcore_document" => 8];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape', 'capitalize'],
                ['pimcore_document'],
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
