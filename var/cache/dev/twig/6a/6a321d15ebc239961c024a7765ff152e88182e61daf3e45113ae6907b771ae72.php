<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_697dbe6eaf185433be75e1e97e539e8f6a37424cd24a740b4dafae4e691e5c17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_2c523d781da5555cfd2b074d35c62e57967f80fd44152a98a2cb2b94a3c49d53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c523d781da5555cfd2b074d35c62e57967f80fd44152a98a2cb2b94a3c49d53->enter($__internal_2c523d781da5555cfd2b074d35c62e57967f80fd44152a98a2cb2b94a3c49d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_60656fc7bb0464a410749b298431fe97e5ed60cc09cc2dc66e77e06db12c9496 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60656fc7bb0464a410749b298431fe97e5ed60cc09cc2dc66e77e06db12c9496->enter($__internal_60656fc7bb0464a410749b298431fe97e5ed60cc09cc2dc66e77e06db12c9496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c523d781da5555cfd2b074d35c62e57967f80fd44152a98a2cb2b94a3c49d53->leave($__internal_2c523d781da5555cfd2b074d35c62e57967f80fd44152a98a2cb2b94a3c49d53_prof);

        
        $__internal_60656fc7bb0464a410749b298431fe97e5ed60cc09cc2dc66e77e06db12c9496->leave($__internal_60656fc7bb0464a410749b298431fe97e5ed60cc09cc2dc66e77e06db12c9496_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_81228aa32aaeb4c40b4473c4091a083a4ad1fcf96b8d7c0f451b6003940db952 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81228aa32aaeb4c40b4473c4091a083a4ad1fcf96b8d7c0f451b6003940db952->enter($__internal_81228aa32aaeb4c40b4473c4091a083a4ad1fcf96b8d7c0f451b6003940db952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ab9cce870c12e4faa8b0e448e43372c73eb2bcd2ae68af74eb457e69537109f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab9cce870c12e4faa8b0e448e43372c73eb2bcd2ae68af74eb457e69537109f3->enter($__internal_ab9cce870c12e4faa8b0e448e43372c73eb2bcd2ae68af74eb457e69537109f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_ab9cce870c12e4faa8b0e448e43372c73eb2bcd2ae68af74eb457e69537109f3->leave($__internal_ab9cce870c12e4faa8b0e448e43372c73eb2bcd2ae68af74eb457e69537109f3_prof);

        
        $__internal_81228aa32aaeb4c40b4473c4091a083a4ad1fcf96b8d7c0f451b6003940db952->leave($__internal_81228aa32aaeb4c40b4473c4091a083a4ad1fcf96b8d7c0f451b6003940db952_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
", "FOSUserBundle:Resetting:request.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
