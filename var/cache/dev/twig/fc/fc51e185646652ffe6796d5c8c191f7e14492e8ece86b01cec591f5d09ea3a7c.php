<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_286a8eb0ac231059f4ba4930b2aa723b3e58c5c281c3649378338a323eb2a997 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_fadb9e49bc9c2275ccdeba330dbb4f6c9c6499eac443b316d94f573b6312812b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fadb9e49bc9c2275ccdeba330dbb4f6c9c6499eac443b316d94f573b6312812b->enter($__internal_fadb9e49bc9c2275ccdeba330dbb4f6c9c6499eac443b316d94f573b6312812b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $__internal_bb6bdc49d5ab5594ec7520510f25ea430c64b053bd204a9e63ae2e0015735fc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb6bdc49d5ab5594ec7520510f25ea430c64b053bd204a9e63ae2e0015735fc9->enter($__internal_bb6bdc49d5ab5594ec7520510f25ea430c64b053bd204a9e63ae2e0015735fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fadb9e49bc9c2275ccdeba330dbb4f6c9c6499eac443b316d94f573b6312812b->leave($__internal_fadb9e49bc9c2275ccdeba330dbb4f6c9c6499eac443b316d94f573b6312812b_prof);

        
        $__internal_bb6bdc49d5ab5594ec7520510f25ea430c64b053bd204a9e63ae2e0015735fc9->leave($__internal_bb6bdc49d5ab5594ec7520510f25ea430c64b053bd204a9e63ae2e0015735fc9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cdb6d50592daa5eb652a46b96e12a908c4fee2aed776e20fafcc55c081a306c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdb6d50592daa5eb652a46b96e12a908c4fee2aed776e20fafcc55c081a306c6->enter($__internal_cdb6d50592daa5eb652a46b96e12a908c4fee2aed776e20fafcc55c081a306c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_204be6e3794112ec9e65020804fc1fc1720313769fe237d1d0a2d56cf904a215 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_204be6e3794112ec9e65020804fc1fc1720313769fe237d1d0a2d56cf904a215->enter($__internal_204be6e3794112ec9e65020804fc1fc1720313769fe237d1d0a2d56cf904a215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_204be6e3794112ec9e65020804fc1fc1720313769fe237d1d0a2d56cf904a215->leave($__internal_204be6e3794112ec9e65020804fc1fc1720313769fe237d1d0a2d56cf904a215_prof);

        
        $__internal_cdb6d50592daa5eb652a46b96e12a908c4fee2aed776e20fafcc55c081a306c6->leave($__internal_cdb6d50592daa5eb652a46b96e12a908c4fee2aed776e20fafcc55c081a306c6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/list.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Group\\list.html.twig");
    }
}
