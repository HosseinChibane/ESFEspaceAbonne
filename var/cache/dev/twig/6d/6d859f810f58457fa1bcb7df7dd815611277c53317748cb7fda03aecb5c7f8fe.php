<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_7a448448cc83b4869efe12d9db35d8153d498007bdff5de72b40ccd40ddcb708 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_f0204a0fea5a241a1a169660106ca7b761f83da02c73093028e2a72d797781a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0204a0fea5a241a1a169660106ca7b761f83da02c73093028e2a72d797781a9->enter($__internal_f0204a0fea5a241a1a169660106ca7b761f83da02c73093028e2a72d797781a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_d76c0e36d40c007b72899730054afd21bf3b8defbc9f680f556531f33365e0b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d76c0e36d40c007b72899730054afd21bf3b8defbc9f680f556531f33365e0b5->enter($__internal_d76c0e36d40c007b72899730054afd21bf3b8defbc9f680f556531f33365e0b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0204a0fea5a241a1a169660106ca7b761f83da02c73093028e2a72d797781a9->leave($__internal_f0204a0fea5a241a1a169660106ca7b761f83da02c73093028e2a72d797781a9_prof);

        
        $__internal_d76c0e36d40c007b72899730054afd21bf3b8defbc9f680f556531f33365e0b5->leave($__internal_d76c0e36d40c007b72899730054afd21bf3b8defbc9f680f556531f33365e0b5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_17e0750015b269779939a807f76c6bbd4baad7fd71cd65aa5efbe4cd8b27c1c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17e0750015b269779939a807f76c6bbd4baad7fd71cd65aa5efbe4cd8b27c1c9->enter($__internal_17e0750015b269779939a807f76c6bbd4baad7fd71cd65aa5efbe4cd8b27c1c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e468fb81eaa8d8199587dc76fdabc9a7b54d935e6e3e377443e41e82022cf239 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e468fb81eaa8d8199587dc76fdabc9a7b54d935e6e3e377443e41e82022cf239->enter($__internal_e468fb81eaa8d8199587dc76fdabc9a7b54d935e6e3e377443e41e82022cf239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_e468fb81eaa8d8199587dc76fdabc9a7b54d935e6e3e377443e41e82022cf239->leave($__internal_e468fb81eaa8d8199587dc76fdabc9a7b54d935e6e3e377443e41e82022cf239_prof);

        
        $__internal_17e0750015b269779939a807f76c6bbd4baad7fd71cd65aa5efbe4cd8b27c1c9->leave($__internal_17e0750015b269779939a807f76c6bbd4baad7fd71cd65aa5efbe4cd8b27c1c9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}
