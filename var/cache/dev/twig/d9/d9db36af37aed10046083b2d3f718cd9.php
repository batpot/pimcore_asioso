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
class __TwigTemplate_cf909544748197c1d500b2663adb6495 extends Template
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

        // line 1
        yield "<footer class=\"site-footer\">
  <div class=\"container\">
    <div class=\"footer-columns\">
      ";
        // line 5
        yield "      <section class=\"one_quarter\">
        <h2 class=\"title\">Link Block</h2>
        <nav><ul>
          <li><a href=\"#\">Lorem ipsum dolor sit</a></li>
          <li><a href=\"#\">Amet consectetur</a></li>
          <li><a href=\"#\">Praesent vel sem id</a></li>
          <li><a href=\"#\">Curabitur hendrerit est</a></li>
        </ul></nav>
      </section>

      <section class=\"one_quarter\">
        <h2 class=\"title\">Link Block</h2>
        <nav><ul>
          <li><a href=\"#\">Lorem ipsum dolor sit</a></li>
          <li><a href=\"#\">Amet consectetur</a></li>
          <li><a href=\"#\">Praesent vel sem id</a></li>
          <li><a href=\"#\">Curabitur hendrerit est</a></li>
        </ul></nav>
      </section>

      <section class=\"one_quarter\">
        <h2 class=\"title\">Link Block</h2>
        <nav><ul>
          <li><a href=\"#\">Lorem ipsum dolor sit</a></li>
          <li><a href=\"#\">Amet consectetur</a></li>
          <li><a href=\"#\">Praesent vel sem id</a></li>
          <li><a href=\"#\">Curabitur hendrerit est</a></li>
        </ul></nav>
      </section>

      <section class=\"one_quarter lastbox\">
        <h2 class=\"title\">Link Block</h2>
        <nav><ul>
          <li><a href=\"#\">Lorem ipsum dolor sit</a></li>
          <li><a href=\"#\">Amet consectetur</a></li>
          <li><a href=\"#\">Praesent vel sem id</a></li>
          <li><a href=\"#\">Curabitur hendrerit est</a></li>
        </ul></nav>
      </section>
    </div>

    <div id=\"copyright\" class=\"clear\">
      <p class=\"fl_left\">
        ";
        // line 48
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["document"] ?? null), "getProperty", ["footer_text"], "method", true, true, true, 48)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 48, $this->source); })()), "getProperty", ["footer_text"], "method", false, false, true, 48), 48, $this->source), "Copyright © 2025 - All Rights Reserved")) : ("Copyright © 2025 - All Rights Reserved"));
        yield "
      </p>
      <p class=\"fl_right\">Posao kod <a href=\"https://www.asioso.com/ba/posao-kod-asioso\">asioso</a></p>
    </div>
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
        return array (  100 => 48,  55 => 5,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<footer class=\"site-footer\">
  <div class=\"container\">
    <div class=\"footer-columns\">
      {# static columns with link placeholders that you can later make editable #}
      <section class=\"one_quarter\">
        <h2 class=\"title\">Link Block</h2>
        <nav><ul>
          <li><a href=\"#\">Lorem ipsum dolor sit</a></li>
          <li><a href=\"#\">Amet consectetur</a></li>
          <li><a href=\"#\">Praesent vel sem id</a></li>
          <li><a href=\"#\">Curabitur hendrerit est</a></li>
        </ul></nav>
      </section>

      <section class=\"one_quarter\">
        <h2 class=\"title\">Link Block</h2>
        <nav><ul>
          <li><a href=\"#\">Lorem ipsum dolor sit</a></li>
          <li><a href=\"#\">Amet consectetur</a></li>
          <li><a href=\"#\">Praesent vel sem id</a></li>
          <li><a href=\"#\">Curabitur hendrerit est</a></li>
        </ul></nav>
      </section>

      <section class=\"one_quarter\">
        <h2 class=\"title\">Link Block</h2>
        <nav><ul>
          <li><a href=\"#\">Lorem ipsum dolor sit</a></li>
          <li><a href=\"#\">Amet consectetur</a></li>
          <li><a href=\"#\">Praesent vel sem id</a></li>
          <li><a href=\"#\">Curabitur hendrerit est</a></li>
        </ul></nav>
      </section>

      <section class=\"one_quarter lastbox\">
        <h2 class=\"title\">Link Block</h2>
        <nav><ul>
          <li><a href=\"#\">Lorem ipsum dolor sit</a></li>
          <li><a href=\"#\">Amet consectetur</a></li>
          <li><a href=\"#\">Praesent vel sem id</a></li>
          <li><a href=\"#\">Curabitur hendrerit est</a></li>
        </ul></nav>
      </section>
    </div>

    <div id=\"copyright\" class=\"clear\">
      <p class=\"fl_left\">
        {{ document.getProperty('footer_text')|default('Copyright © 2025 - All Rights Reserved')|raw }}
      </p>
      <p class=\"fl_right\">Posao kod <a href=\"https://www.asioso.com/ba/posao-kod-asioso\">asioso</a></p>
    </div>
  </div>
</footer>
", "snippets/footer.html.twig", "/home/batpot/skeleton-project/templates/snippets/footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["raw" => 48, "default" => 48];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['raw', 'default'],
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
