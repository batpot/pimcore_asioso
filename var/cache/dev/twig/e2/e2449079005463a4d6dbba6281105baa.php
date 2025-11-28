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

/* snippets/footer.html.twig */
class __TwigTemplate_0eb5254c6ac7f0be724b155f9761d14e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "snippets/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "snippets/footer.html.twig"));

        // line 2
        yield "
";
        // line 3
        if ((($tmp = (isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 3, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 4
            yield "    ";
            CoreExtension::getAttribute($this->env, $this->source, $this->env->getFunction('pimcore_head_link')->getCallable()(), "appendStylesheet", [$this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("static/css/editmode.css")], "method", false, false, true, 4);
            // line 5
            yield "    ";
            yield $this->env->getFunction('pimcore_head_link')->getCallable()();
            yield "
";
        }
        // line 7
        yield "
<footer class=\"container py-5\">
    <div class=\"row\">

      <div class=\"col-12 col-md\">
          <a class=\"text-dark text-decoration-none\" href=\"/\">
              <small class=\"d-block mb-3 p-3\">&copy; ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " My Pimcore Site</small>
          </a>
      </div>

        ";
        // line 17
        if ((($tmp = (isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 17, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 18
            yield "            <h3 class=\"float-left\">";
            yield "Footer Column(s):";
            yield "</h3>
        ";
        }
        // line 20
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->getBlockIterator($this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "block", "mainlinkblock")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 21
            yield "            <div class=\"col-6 col-md\">
                <h5>";
            // line 22
            yield $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "mainBlockTitle", ["placeholder" => "Footer Title"], $this->sandbox->ensureToStringAllowed($context["i"], 22, $this->source));
            yield "</h5>
                <ul class=\"list-unstyled text-small\">
                    ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->getBlockIterator($this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "block", "linkblock")));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 25
                yield "                        <li>";
                yield $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "link", "myLink", ["class" => "text-muted"], $this->sandbox->ensureToStringAllowed($context["i"], 25, $this->source));
                yield "</li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            yield "                </ul>
            </div>
            ";
            // line 29
            if ((($tmp = (isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 29, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 30
                yield "                <hr />
            ";
            }
            // line 32
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "
    </div>
</footer>
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
        return "snippets/footer.html.twig";
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
        return array (  129 => 33,  123 => 32,  119 => 30,  117 => 29,  113 => 27,  104 => 25,  100 => 24,  95 => 22,  92 => 21,  87 => 20,  81 => 18,  79 => 17,  72 => 13,  64 => 7,  58 => 5,  55 => 4,  53 => 3,  50 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Editable footer snippet for Pimcore #}

{% if editmode %}
    {% do pimcore_head_link().appendStylesheet(asset('static/css/editmode.css')) %}
    {{ pimcore_head_link() }}
{% endif %}

<footer class=\"container py-5\">
    <div class=\"row\">

      <div class=\"col-12 col-md\">
          <a class=\"text-dark text-decoration-none\" href=\"/\">
              <small class=\"d-block mb-3 p-3\">&copy; {{ \"now\"|date('Y') }} My Pimcore Site</small>
          </a>
      </div>

        {% if editmode %}
            <h3 class=\"float-left\">{{ 'Footer Column(s):' }}</h3>
        {% endif %}
        {% for i in pimcore_iterate_block(pimcore_block('mainlinkblock')) %}
            <div class=\"col-6 col-md\">
                <h5>{{ pimcore_input('mainBlockTitle', {'placeholder': 'Footer Title'}, i) }}</h5>
                <ul class=\"list-unstyled text-small\">
                    {% for i in pimcore_iterate_block(pimcore_block('linkblock')) %}
                        <li>{{ pimcore_link('myLink', {'class': \"text-muted\"}, i) }}</li>
                    {% endfor %}
                </ul>
            </div>
            {% if editmode %}
                <hr />
            {% endif %}
        {% endfor %}

    </div>
</footer>
", "snippets/footer.html.twig", "/var/www/html/templates/snippets/footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 3, "do" => 4, "for" => 20];
        static $filters = ["escape" => 13, "date" => 13];
        static $functions = ["pimcore_head_link" => 4, "asset" => 4, "pimcore_iterate_block" => 20, "pimcore_block" => 20, "pimcore_input" => 22, "pimcore_link" => 25];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'do', 'for'],
                ['escape', 'date'],
                ['pimcore_head_link', 'asset', 'pimcore_iterate_block', 'pimcore_block', 'pimcore_input', 'pimcore_link'],
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
