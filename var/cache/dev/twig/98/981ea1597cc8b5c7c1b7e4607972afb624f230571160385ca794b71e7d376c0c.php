<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_07fd936e6b37bb528bbf9cce186f101a3c454ea4ac6b47b00d7f29bde621bcdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_7f8c9c18e34623e75546236a7e3a909dd0e754e7bf4f2d72d854f0c085905225 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f8c9c18e34623e75546236a7e3a909dd0e754e7bf4f2d72d854f0c085905225->enter($__internal_7f8c9c18e34623e75546236a7e3a909dd0e754e7bf4f2d72d854f0c085905225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_8704ebbbd72bc74987220d717496183b76acc9b7a0c936c71c0ab6661059a49c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8704ebbbd72bc74987220d717496183b76acc9b7a0c936c71c0ab6661059a49c->enter($__internal_8704ebbbd72bc74987220d717496183b76acc9b7a0c936c71c0ab6661059a49c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f8c9c18e34623e75546236a7e3a909dd0e754e7bf4f2d72d854f0c085905225->leave($__internal_7f8c9c18e34623e75546236a7e3a909dd0e754e7bf4f2d72d854f0c085905225_prof);

        
        $__internal_8704ebbbd72bc74987220d717496183b76acc9b7a0c936c71c0ab6661059a49c->leave($__internal_8704ebbbd72bc74987220d717496183b76acc9b7a0c936c71c0ab6661059a49c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_666b4881808f06fda2310bd76cd54f0f7304bff24333521c411ffdd4f20dcfd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_666b4881808f06fda2310bd76cd54f0f7304bff24333521c411ffdd4f20dcfd7->enter($__internal_666b4881808f06fda2310bd76cd54f0f7304bff24333521c411ffdd4f20dcfd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f8a1b1d1d6d49cd97b9670100b0826de79c5cb87c6fccfdb3a90ce5abdf97997 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8a1b1d1d6d49cd97b9670100b0826de79c5cb87c6fccfdb3a90ce5abdf97997->enter($__internal_f8a1b1d1d6d49cd97b9670100b0826de79c5cb87c6fccfdb3a90ce5abdf97997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_f8a1b1d1d6d49cd97b9670100b0826de79c5cb87c6fccfdb3a90ce5abdf97997->leave($__internal_f8a1b1d1d6d49cd97b9670100b0826de79c5cb87c6fccfdb3a90ce5abdf97997_prof);

        
        $__internal_666b4881808f06fda2310bd76cd54f0f7304bff24333521c411ffdd4f20dcfd7->leave($__internal_666b4881808f06fda2310bd76cd54f0f7304bff24333521c411ffdd4f20dcfd7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
