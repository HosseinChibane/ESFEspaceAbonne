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
        $__internal_41090142d8574d9c497069579da9db823def0f23359ed5dbb5e40364c89949d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41090142d8574d9c497069579da9db823def0f23359ed5dbb5e40364c89949d3->enter($__internal_41090142d8574d9c497069579da9db823def0f23359ed5dbb5e40364c89949d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $__internal_7a6c4e9049c533165005c3b6ce3dc127ad522b6e0beeb9e50083c6449e28b6d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a6c4e9049c533165005c3b6ce3dc127ad522b6e0beeb9e50083c6449e28b6d4->enter($__internal_7a6c4e9049c533165005c3b6ce3dc127ad522b6e0beeb9e50083c6449e28b6d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41090142d8574d9c497069579da9db823def0f23359ed5dbb5e40364c89949d3->leave($__internal_41090142d8574d9c497069579da9db823def0f23359ed5dbb5e40364c89949d3_prof);

        
        $__internal_7a6c4e9049c533165005c3b6ce3dc127ad522b6e0beeb9e50083c6449e28b6d4->leave($__internal_7a6c4e9049c533165005c3b6ce3dc127ad522b6e0beeb9e50083c6449e28b6d4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a97d5a1be4228e57738051a9230c9fd122359aec0e2d5b76722ccb8a859c2c22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a97d5a1be4228e57738051a9230c9fd122359aec0e2d5b76722ccb8a859c2c22->enter($__internal_a97d5a1be4228e57738051a9230c9fd122359aec0e2d5b76722ccb8a859c2c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_efd114f600fb9a50fe4afddc498ea593347d150b5418f40da003f4a4a1ffd69b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efd114f600fb9a50fe4afddc498ea593347d150b5418f40da003f4a4a1ffd69b->enter($__internal_efd114f600fb9a50fe4afddc498ea593347d150b5418f40da003f4a4a1ffd69b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_efd114f600fb9a50fe4afddc498ea593347d150b5418f40da003f4a4a1ffd69b->leave($__internal_efd114f600fb9a50fe4afddc498ea593347d150b5418f40da003f4a4a1ffd69b_prof);

        
        $__internal_a97d5a1be4228e57738051a9230c9fd122359aec0e2d5b76722ccb8a859c2c22->leave($__internal_a97d5a1be4228e57738051a9230c9fd122359aec0e2d5b76722ccb8a859c2c22_prof);

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
