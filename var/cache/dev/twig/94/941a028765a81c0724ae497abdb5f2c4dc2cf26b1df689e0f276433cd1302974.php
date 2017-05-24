<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_bbcc14f1a1e82af2b258431ffe552c64db2eee4fc24ccecfeb777feb86e45afa extends Twig_Template
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
        $__internal_da6abdeb690ce7739f3967f5ed5426ba08177674a81bbfbcac73f4a16081d942 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da6abdeb690ce7739f3967f5ed5426ba08177674a81bbfbcac73f4a16081d942->enter($__internal_da6abdeb690ce7739f3967f5ed5426ba08177674a81bbfbcac73f4a16081d942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $__internal_50d741c78af6544ebb64e0cd387d3a10b77f26fceb6efedf9b0739868cb50726 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50d741c78af6544ebb64e0cd387d3a10b77f26fceb6efedf9b0739868cb50726->enter($__internal_50d741c78af6544ebb64e0cd387d3a10b77f26fceb6efedf9b0739868cb50726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da6abdeb690ce7739f3967f5ed5426ba08177674a81bbfbcac73f4a16081d942->leave($__internal_da6abdeb690ce7739f3967f5ed5426ba08177674a81bbfbcac73f4a16081d942_prof);

        
        $__internal_50d741c78af6544ebb64e0cd387d3a10b77f26fceb6efedf9b0739868cb50726->leave($__internal_50d741c78af6544ebb64e0cd387d3a10b77f26fceb6efedf9b0739868cb50726_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_310b587ee2f1611d1b1e5f40d07dda1a3dfc35485b68ece8af935f7b4a802da0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_310b587ee2f1611d1b1e5f40d07dda1a3dfc35485b68ece8af935f7b4a802da0->enter($__internal_310b587ee2f1611d1b1e5f40d07dda1a3dfc35485b68ece8af935f7b4a802da0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_106269888a1fde127a90bfec93627f72e770a6f2d917f0c65056a8fd553bf3d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_106269888a1fde127a90bfec93627f72e770a6f2d917f0c65056a8fd553bf3d4->enter($__internal_106269888a1fde127a90bfec93627f72e770a6f2d917f0c65056a8fd553bf3d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_106269888a1fde127a90bfec93627f72e770a6f2d917f0c65056a8fd553bf3d4->leave($__internal_106269888a1fde127a90bfec93627f72e770a6f2d917f0c65056a8fd553bf3d4_prof);

        
        $__internal_310b587ee2f1611d1b1e5f40d07dda1a3dfc35485b68ece8af935f7b4a802da0->leave($__internal_310b587ee2f1611d1b1e5f40d07dda1a3dfc35485b68ece8af935f7b4a802da0_prof);

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
