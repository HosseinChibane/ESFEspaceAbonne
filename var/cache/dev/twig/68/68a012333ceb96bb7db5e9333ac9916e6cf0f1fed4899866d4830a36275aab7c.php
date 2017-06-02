<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_c7bfb4498e823a07d852f8ad5352aa9be73df8c82a184651ba762ad0ca96fc27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_9c22ee8246112faa6cb80fd33de7d8276cdf16047ab8418163ae1b04a8cf0486 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c22ee8246112faa6cb80fd33de7d8276cdf16047ab8418163ae1b04a8cf0486->enter($__internal_9c22ee8246112faa6cb80fd33de7d8276cdf16047ab8418163ae1b04a8cf0486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $__internal_7a54f7884a0e475c10951869e25c7fdc091c4887cd64fb2c79d35f3350c454ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a54f7884a0e475c10951869e25c7fdc091c4887cd64fb2c79d35f3350c454ee->enter($__internal_7a54f7884a0e475c10951869e25c7fdc091c4887cd64fb2c79d35f3350c454ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c22ee8246112faa6cb80fd33de7d8276cdf16047ab8418163ae1b04a8cf0486->leave($__internal_9c22ee8246112faa6cb80fd33de7d8276cdf16047ab8418163ae1b04a8cf0486_prof);

        
        $__internal_7a54f7884a0e475c10951869e25c7fdc091c4887cd64fb2c79d35f3350c454ee->leave($__internal_7a54f7884a0e475c10951869e25c7fdc091c4887cd64fb2c79d35f3350c454ee_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_acdb97d3a954b6922a824b1112b322be428dbfd66d1e9a9855c832180c04ee9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acdb97d3a954b6922a824b1112b322be428dbfd66d1e9a9855c832180c04ee9c->enter($__internal_acdb97d3a954b6922a824b1112b322be428dbfd66d1e9a9855c832180c04ee9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_eb8d7dbfe76ad88e9b08e4c6340833b6ecb8337c7780b8b5cee579aae51ae422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb8d7dbfe76ad88e9b08e4c6340833b6ecb8337c7780b8b5cee579aae51ae422->enter($__internal_eb8d7dbfe76ad88e9b08e4c6340833b6ecb8337c7780b8b5cee579aae51ae422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_eb8d7dbfe76ad88e9b08e4c6340833b6ecb8337c7780b8b5cee579aae51ae422->leave($__internal_eb8d7dbfe76ad88e9b08e4c6340833b6ecb8337c7780b8b5cee579aae51ae422_prof);

        
        $__internal_acdb97d3a954b6922a824b1112b322be428dbfd66d1e9a9855c832180c04ee9c->leave($__internal_acdb97d3a954b6922a824b1112b322be428dbfd66d1e9a9855c832180c04ee9c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
", "@FOSUser/Resetting/reset.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Resetting\\reset.html.twig");
    }
}
