<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_5f840e16011cc759cc70b31de4cf65aed7cbe8b5d56852e3adbebc54020e7bf8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb4c68d2d39be85bd1440a120480a271fae5495fdb0a4e31f58c372fbabbfa45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb4c68d2d39be85bd1440a120480a271fae5495fdb0a4e31f58c372fbabbfa45->enter($__internal_eb4c68d2d39be85bd1440a120480a271fae5495fdb0a4e31f58c372fbabbfa45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $__internal_6f9972cdc832f893d694b253aeb3fc87ec35bcce12a5f2e9e7d9e2e442e1cc93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f9972cdc832f893d694b253aeb3fc87ec35bcce12a5f2e9e7d9e2e442e1cc93->enter($__internal_6f9972cdc832f893d694b253aeb3fc87ec35bcce12a5f2e9e7d9e2e442e1cc93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb4c68d2d39be85bd1440a120480a271fae5495fdb0a4e31f58c372fbabbfa45->leave($__internal_eb4c68d2d39be85bd1440a120480a271fae5495fdb0a4e31f58c372fbabbfa45_prof);

        
        $__internal_6f9972cdc832f893d694b253aeb3fc87ec35bcce12a5f2e9e7d9e2e442e1cc93->leave($__internal_6f9972cdc832f893d694b253aeb3fc87ec35bcce12a5f2e9e7d9e2e442e1cc93_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_964e1b508d45cb8ba1e8701d02e0479dc7f3d3da655274773cd3c0da9e1b4f42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_964e1b508d45cb8ba1e8701d02e0479dc7f3d3da655274773cd3c0da9e1b4f42->enter($__internal_964e1b508d45cb8ba1e8701d02e0479dc7f3d3da655274773cd3c0da9e1b4f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7823e86ffc3702f14018f2ed33f4e4ff7c071e13a2ddd64ae2fc1fa74d4369f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7823e86ffc3702f14018f2ed33f4e4ff7c071e13a2ddd64ae2fc1fa74d4369f6->enter($__internal_7823e86ffc3702f14018f2ed33f4e4ff7c071e13a2ddd64ae2fc1fa74d4369f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_7823e86ffc3702f14018f2ed33f4e4ff7c071e13a2ddd64ae2fc1fa74d4369f6->leave($__internal_7823e86ffc3702f14018f2ed33f4e4ff7c071e13a2ddd64ae2fc1fa74d4369f6_prof);

        
        $__internal_964e1b508d45cb8ba1e8701d02e0479dc7f3d3da655274773cd3c0da9e1b4f42->leave($__internal_964e1b508d45cb8ba1e8701d02e0479dc7f3d3da655274773cd3c0da9e1b4f42_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Group\\show.html.twig");
    }
}
