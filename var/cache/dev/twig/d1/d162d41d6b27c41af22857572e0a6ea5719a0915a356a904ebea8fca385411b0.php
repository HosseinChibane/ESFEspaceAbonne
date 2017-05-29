<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_6af58d5e8928c0d2ad6c4fe42742140e92fbbf66f530df390e1204c0564e2012 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_1ae6a152b084db6607244dc6f6fe09fd438a8ca3b6a1578e6868420135accb7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ae6a152b084db6607244dc6f6fe09fd438a8ca3b6a1578e6868420135accb7c->enter($__internal_1ae6a152b084db6607244dc6f6fe09fd438a8ca3b6a1578e6868420135accb7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $__internal_24e8941944e09fd6766ef31ab4fdb8ce335172455757389bf79d998478b80c68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24e8941944e09fd6766ef31ab4fdb8ce335172455757389bf79d998478b80c68->enter($__internal_24e8941944e09fd6766ef31ab4fdb8ce335172455757389bf79d998478b80c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ae6a152b084db6607244dc6f6fe09fd438a8ca3b6a1578e6868420135accb7c->leave($__internal_1ae6a152b084db6607244dc6f6fe09fd438a8ca3b6a1578e6868420135accb7c_prof);

        
        $__internal_24e8941944e09fd6766ef31ab4fdb8ce335172455757389bf79d998478b80c68->leave($__internal_24e8941944e09fd6766ef31ab4fdb8ce335172455757389bf79d998478b80c68_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d903b775220474ebb377374151a6a647850b1cafb583d51394be78c72f0c20e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d903b775220474ebb377374151a6a647850b1cafb583d51394be78c72f0c20e3->enter($__internal_d903b775220474ebb377374151a6a647850b1cafb583d51394be78c72f0c20e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ca2f2a86cc9b503ef90fdbe5957f7c2aa534842ccdd34ad9d4485d7dda041a1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca2f2a86cc9b503ef90fdbe5957f7c2aa534842ccdd34ad9d4485d7dda041a1d->enter($__internal_ca2f2a86cc9b503ef90fdbe5957f7c2aa534842ccdd34ad9d4485d7dda041a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_ca2f2a86cc9b503ef90fdbe5957f7c2aa534842ccdd34ad9d4485d7dda041a1d->leave($__internal_ca2f2a86cc9b503ef90fdbe5957f7c2aa534842ccdd34ad9d4485d7dda041a1d_prof);

        
        $__internal_d903b775220474ebb377374151a6a647850b1cafb583d51394be78c72f0c20e3->leave($__internal_d903b775220474ebb377374151a6a647850b1cafb583d51394be78c72f0c20e3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Resetting\\request.html.twig");
    }
}
