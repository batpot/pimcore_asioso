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

/* snippets/hero.html.twig */
class __TwigTemplate_640bb76b8168a83d9e2ff6df8d780f76 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "snippets/hero.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "snippets/hero.html.twig"));

        // line 1
        yield "<section class=\"hero-banner\" 
         style=\"background-image: url( ";
        // line 2
        yield (($this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "image", "heroImage")) ? ($this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "image", "heroImage")) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/static/images/960x360.gif"), "html", null, true)));
        yield " )>
    <div class=\"hero-text\">
        <h1>";
        // line 4
        yield $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "heroTitle", ["placeholder" => "Enter hero title"]);
        yield "</h1>
        <p>";
        // line 5
        yield $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "input", "heroSubtitle", ["placeholder" => "Enter hero subtitle"]);
        yield "</p>
        ";
        // line 6
        if ((($tmp = (isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 6, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 7
            yield "            <small style=\"opacity: 0.7; font-size: 0.8em;\">Editable in Pimcore</small>
        ";
        }
        // line 9
        yield "    </div>
</section>
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
        return "snippets/hero.html.twig";
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
        return array (  72 => 9,  68 => 7,  66 => 6,  62 => 5,  58 => 4,  53 => 2,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<section class=\"hero-banner\" 
         style=\"background-image: url( {{ pimcore_image('heroImage') ?: asset('/static/images/960x360.gif') }} )>
    <div class=\"hero-text\">
        <h1>{{ pimcore_input('heroTitle', {'placeholder': 'Enter hero title'}) }}</h1>
        <p>{{ pimcore_input('heroSubtitle', {'placeholder': 'Enter hero subtitle'}) }}</p>
        {% if editmode %}
            <small style=\"opacity: 0.7; font-size: 0.8em;\">Editable in Pimcore</small>
        {% endif %}
    </div>
</section>
", "snippets/hero.html.twig", "/var/www/html/templates/snippets/hero.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 6];
        static $filters = ["escape" => 2];
        static $functions = ["pimcore_image" => 2, "asset" => 2, "pimcore_input" => 4];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['pimcore_image', 'asset', 'pimcore_input'],
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
