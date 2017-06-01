<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_608d6a0288b534b2552a9cee86d4ccdbb5b9a5f55419992b736482d7f47f88c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4626ad5ae8a8c85dd1a56dc874f8b3ad1755bde324a19c04c51abd26abbaad95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4626ad5ae8a8c85dd1a56dc874f8b3ad1755bde324a19c04c51abd26abbaad95->enter($__internal_4626ad5ae8a8c85dd1a56dc874f8b3ad1755bde324a19c04c51abd26abbaad95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_539b92d045022b4a324fe2a96dc7ec64dd43a36463ae21b53581d5049ed77bd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_539b92d045022b4a324fe2a96dc7ec64dd43a36463ae21b53581d5049ed77bd9->enter($__internal_539b92d045022b4a324fe2a96dc7ec64dd43a36463ae21b53581d5049ed77bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4626ad5ae8a8c85dd1a56dc874f8b3ad1755bde324a19c04c51abd26abbaad95->leave($__internal_4626ad5ae8a8c85dd1a56dc874f8b3ad1755bde324a19c04c51abd26abbaad95_prof);

        
        $__internal_539b92d045022b4a324fe2a96dc7ec64dd43a36463ae21b53581d5049ed77bd9->leave($__internal_539b92d045022b4a324fe2a96dc7ec64dd43a36463ae21b53581d5049ed77bd9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c9950ad1d485271437ab525678f605914b27598e49f86cfa69df5b1a7bd81a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c9950ad1d485271437ab525678f605914b27598e49f86cfa69df5b1a7bd81a3->enter($__internal_5c9950ad1d485271437ab525678f605914b27598e49f86cfa69df5b1a7bd81a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_75610cd512ccef92227879696966e012162455b5fe0e23bd72b48738e88a9da2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75610cd512ccef92227879696966e012162455b5fe0e23bd72b48738e88a9da2->enter($__internal_75610cd512ccef92227879696966e012162455b5fe0e23bd72b48738e88a9da2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_75610cd512ccef92227879696966e012162455b5fe0e23bd72b48738e88a9da2->leave($__internal_75610cd512ccef92227879696966e012162455b5fe0e23bd72b48738e88a9da2_prof);

        
        $__internal_5c9950ad1d485271437ab525678f605914b27598e49f86cfa69df5b1a7bd81a3->leave($__internal_5c9950ad1d485271437ab525678f605914b27598e49f86cfa69df5b1a7bd81a3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_59ba7017e2ede535d952138d50a699b75f5ef5dbd3ac88964dc8915ef8668fd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59ba7017e2ede535d952138d50a699b75f5ef5dbd3ac88964dc8915ef8668fd2->enter($__internal_59ba7017e2ede535d952138d50a699b75f5ef5dbd3ac88964dc8915ef8668fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9bc3e5397ab982bd57c5685dd89cfb7d1faf23c5e4d70ab6d3b27e39d7b6c945 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bc3e5397ab982bd57c5685dd89cfb7d1faf23c5e4d70ab6d3b27e39d7b6c945->enter($__internal_9bc3e5397ab982bd57c5685dd89cfb7d1faf23c5e4d70ab6d3b27e39d7b6c945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_9bc3e5397ab982bd57c5685dd89cfb7d1faf23c5e4d70ab6d3b27e39d7b6c945->leave($__internal_9bc3e5397ab982bd57c5685dd89cfb7d1faf23c5e4d70ab6d3b27e39d7b6c945_prof);

        
        $__internal_59ba7017e2ede535d952138d50a699b75f5ef5dbd3ac88964dc8915ef8668fd2->leave($__internal_59ba7017e2ede535d952138d50a699b75f5ef5dbd3ac88964dc8915ef8668fd2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
