<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_d6f1e2187e1ac396495ef7e853ad517878d866fba6a479fccb7077998c637d9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_d3874e4b5e0560f9767078390cec0b309088077157883f072f3c1013b4e3dca9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3874e4b5e0560f9767078390cec0b309088077157883f072f3c1013b4e3dca9->enter($__internal_d3874e4b5e0560f9767078390cec0b309088077157883f072f3c1013b4e3dca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_a95f4aae7f77f771c613f78c82e0bdf53887969bbd3875d1574d0dc01e7fe6a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a95f4aae7f77f771c613f78c82e0bdf53887969bbd3875d1574d0dc01e7fe6a3->enter($__internal_a95f4aae7f77f771c613f78c82e0bdf53887969bbd3875d1574d0dc01e7fe6a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3874e4b5e0560f9767078390cec0b309088077157883f072f3c1013b4e3dca9->leave($__internal_d3874e4b5e0560f9767078390cec0b309088077157883f072f3c1013b4e3dca9_prof);

        
        $__internal_a95f4aae7f77f771c613f78c82e0bdf53887969bbd3875d1574d0dc01e7fe6a3->leave($__internal_a95f4aae7f77f771c613f78c82e0bdf53887969bbd3875d1574d0dc01e7fe6a3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9224605cbe15a4b87033f0dae3fc624e2759e59bd717b243866aaed9db867eff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9224605cbe15a4b87033f0dae3fc624e2759e59bd717b243866aaed9db867eff->enter($__internal_9224605cbe15a4b87033f0dae3fc624e2759e59bd717b243866aaed9db867eff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_722ef0d7edb0ed75aa081e271ee4b17e9cd3be619b47c34ff2061a038286bb51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_722ef0d7edb0ed75aa081e271ee4b17e9cd3be619b47c34ff2061a038286bb51->enter($__internal_722ef0d7edb0ed75aa081e271ee4b17e9cd3be619b47c34ff2061a038286bb51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_722ef0d7edb0ed75aa081e271ee4b17e9cd3be619b47c34ff2061a038286bb51->leave($__internal_722ef0d7edb0ed75aa081e271ee4b17e9cd3be619b47c34ff2061a038286bb51_prof);

        
        $__internal_9224605cbe15a4b87033f0dae3fc624e2759e59bd717b243866aaed9db867eff->leave($__internal_9224605cbe15a4b87033f0dae3fc624e2759e59bd717b243866aaed9db867eff_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
