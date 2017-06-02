<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_fc0c79a683535526839a76107cf454b6a778ffcbd7864afd6df50a9519c687c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_c18a7feb69d36c4d89b4546d1ba44b5e581ea3d063634efbdb353cf75cd47abf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c18a7feb69d36c4d89b4546d1ba44b5e581ea3d063634efbdb353cf75cd47abf->enter($__internal_c18a7feb69d36c4d89b4546d1ba44b5e581ea3d063634efbdb353cf75cd47abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_337c711cdb611b6894233edecb01e018313be0c79467285bcf422e53ded6541c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_337c711cdb611b6894233edecb01e018313be0c79467285bcf422e53ded6541c->enter($__internal_337c711cdb611b6894233edecb01e018313be0c79467285bcf422e53ded6541c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c18a7feb69d36c4d89b4546d1ba44b5e581ea3d063634efbdb353cf75cd47abf->leave($__internal_c18a7feb69d36c4d89b4546d1ba44b5e581ea3d063634efbdb353cf75cd47abf_prof);

        
        $__internal_337c711cdb611b6894233edecb01e018313be0c79467285bcf422e53ded6541c->leave($__internal_337c711cdb611b6894233edecb01e018313be0c79467285bcf422e53ded6541c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c468f858142e125b1acf76c650d3287d547382b0e5c843a5ec1506a221d17eeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c468f858142e125b1acf76c650d3287d547382b0e5c843a5ec1506a221d17eeb->enter($__internal_c468f858142e125b1acf76c650d3287d547382b0e5c843a5ec1506a221d17eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6d8e427beb3ac0d34b9a3e567377cbe56a115de3ab4753be2a89e9fa5eee6497 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d8e427beb3ac0d34b9a3e567377cbe56a115de3ab4753be2a89e9fa5eee6497->enter($__internal_6d8e427beb3ac0d34b9a3e567377cbe56a115de3ab4753be2a89e9fa5eee6497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_6d8e427beb3ac0d34b9a3e567377cbe56a115de3ab4753be2a89e9fa5eee6497->leave($__internal_6d8e427beb3ac0d34b9a3e567377cbe56a115de3ab4753be2a89e9fa5eee6497_prof);

        
        $__internal_c468f858142e125b1acf76c650d3287d547382b0e5c843a5ec1506a221d17eeb->leave($__internal_c468f858142e125b1acf76c650d3287d547382b0e5c843a5ec1506a221d17eeb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
", "FOSUserBundle:Group:show.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
