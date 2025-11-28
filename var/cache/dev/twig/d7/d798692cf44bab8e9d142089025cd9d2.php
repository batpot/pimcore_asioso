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
class __TwigTemplate_e728b58e7be4f4817cdaf04dd150118b extends Template
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
        // line 4
        $context["root"] = Pimcore\Model\Document::getById("/homepage");
        // line 5
        yield "            ";
        if ((($tmp = (isset($context["root"]) || array_key_exists("root", $context) ? $context["root"] : (function () { throw new RuntimeError('Variable "root" does not exist.', 5, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 6
            yield "                <li><a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["root"]) || array_key_exists("root", $context) ? $context["root"] : (function () { throw new RuntimeError('Variable "root" does not exist.', 6, $this->source); })()), "getRealFullPath", [], "method", false, false, true, 6), 6, $this->source), "html", null, true);
            yield "\">Home</a></li>

                ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["root"]) || array_key_exists("root", $context) ? $context["root"] : (function () { throw new RuntimeError('Variable "root" does not exist.', 8, $this->source); })()), "getChildren", [], "method", false, false, true, 8));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 9
                yield "                    ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["page"], "published", [], "any", false, false, true, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 10
                    yield "                        <li><a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["page"], "getRealFullPath", [], "method", false, false, true, 10), 10, $this->source), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["page"], "getKey", [], "method", false, false, true, 10), 10, $this->source)), "html", null, true);
                    yield "</a></li>
                    ";
                }
                // line 12
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            yield "            ";
        } else {
            // line 14
            yield "                <li><a href=\"/\">Home</a></li>
            ";
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
        return array (  94 => 16,  90 => 14,  87 => 13,  81 => 12,  73 => 10,  70 => 9,  66 => 8,  60 => 6,  57 => 5,  55 => 4,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<header>
    <nav>
        <ul>
            {% set root = pimcore_document('/homepage') %}
            {% if root %}
                <li><a href=\"{{ root.getRealFullPath() }}\">Home</a></li>

                {% for page in root.getChildren() %}
                    {% if page.published %}
                        <li><a href=\"{{ page.getRealFullPath() }}\">{{ page.getKey()|capitalize }}</a></li>
                    {% endif %}
                {% endfor %}
            {% else %}
                <li><a href=\"/\">Home</a></li>
            {% endif %}
        </ul>
    </nav>
</header>
", "snippets/header.html.twig", "/var/www/html/templates/snippets/header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 4, "if" => 5, "for" => 8];
        static $filters = ["escape" => 6, "capitalize" => 10];
        static $functions = ["pimcore_document" => 4];

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
