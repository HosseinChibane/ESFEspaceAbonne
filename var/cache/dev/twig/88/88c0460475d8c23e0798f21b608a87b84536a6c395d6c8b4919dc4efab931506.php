<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_7a4d2980264112ed615220037fa78fed1dbbffcc2bb5857bc4c865761cf449ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_9972b7321928ac812ca2b91c85551c988dd3587aa60be972b9ff1d54dc2c568f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9972b7321928ac812ca2b91c85551c988dd3587aa60be972b9ff1d54dc2c568f->enter($__internal_9972b7321928ac812ca2b91c85551c988dd3587aa60be972b9ff1d54dc2c568f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_5e4813045c076eabc5f4f40053b2a3aa9af277d496be7f8ce50243cd6e6a3d8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e4813045c076eabc5f4f40053b2a3aa9af277d496be7f8ce50243cd6e6a3d8b->enter($__internal_5e4813045c076eabc5f4f40053b2a3aa9af277d496be7f8ce50243cd6e6a3d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9972b7321928ac812ca2b91c85551c988dd3587aa60be972b9ff1d54dc2c568f->leave($__internal_9972b7321928ac812ca2b91c85551c988dd3587aa60be972b9ff1d54dc2c568f_prof);

        
        $__internal_5e4813045c076eabc5f4f40053b2a3aa9af277d496be7f8ce50243cd6e6a3d8b->leave($__internal_5e4813045c076eabc5f4f40053b2a3aa9af277d496be7f8ce50243cd6e6a3d8b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0892cd5b987b068a94afc562e943d6bec2dd8b7f6df28d6dc6382bd676774c93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0892cd5b987b068a94afc562e943d6bec2dd8b7f6df28d6dc6382bd676774c93->enter($__internal_0892cd5b987b068a94afc562e943d6bec2dd8b7f6df28d6dc6382bd676774c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4b6ea55ba27354a563fcb1a0f6697ef45052550dbe0eff567a082a4d114fdae5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b6ea55ba27354a563fcb1a0f6697ef45052550dbe0eff567a082a4d114fdae5->enter($__internal_4b6ea55ba27354a563fcb1a0f6697ef45052550dbe0eff567a082a4d114fdae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_4b6ea55ba27354a563fcb1a0f6697ef45052550dbe0eff567a082a4d114fdae5->leave($__internal_4b6ea55ba27354a563fcb1a0f6697ef45052550dbe0eff567a082a4d114fdae5_prof);

        
        $__internal_0892cd5b987b068a94afc562e943d6bec2dd8b7f6df28d6dc6382bd676774c93->leave($__internal_0892cd5b987b068a94afc562e943d6bec2dd8b7f6df28d6dc6382bd676774c93_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Security\\login.html.twig");
    }
}
