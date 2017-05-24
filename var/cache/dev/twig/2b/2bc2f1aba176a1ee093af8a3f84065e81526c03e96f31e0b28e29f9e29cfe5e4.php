<?php

/* ESFEspaceAbonneBundle:Default:mesParametresMAIL.html.twig */
class __TwigTemplate_b97c6d5c573e826041e47567b495dccbd29aa93ead94363b975c74c67408e3bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:Default:mesParametresMAIL.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'Content' => array($this, 'block_Content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":backend:sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e357901eef123a390544e8e2762bd80267afd31954d548b679ac3dcc0dfd87e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e357901eef123a390544e8e2762bd80267afd31954d548b679ac3dcc0dfd87e3->enter($__internal_e357901eef123a390544e8e2762bd80267afd31954d548b679ac3dcc0dfd87e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Default:mesParametresMAIL.html.twig"));

        $__internal_fc9890dc6aeb6a9efe2d49597bd357f10a00bfc80716b90d2f5b03a3b860b94a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc9890dc6aeb6a9efe2d49597bd357f10a00bfc80716b90d2f5b03a3b860b94a->enter($__internal_fc9890dc6aeb6a9efe2d49597bd357f10a00bfc80716b90d2f5b03a3b860b94a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Default:mesParametresMAIL.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e357901eef123a390544e8e2762bd80267afd31954d548b679ac3dcc0dfd87e3->leave($__internal_e357901eef123a390544e8e2762bd80267afd31954d548b679ac3dcc0dfd87e3_prof);

        
        $__internal_fc9890dc6aeb6a9efe2d49597bd357f10a00bfc80716b90d2f5b03a3b860b94a->leave($__internal_fc9890dc6aeb6a9efe2d49597bd357f10a00bfc80716b90d2f5b03a3b860b94a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_68c2bdcaa4c3fcf9d425fd1cf12cee84be9b20b0833a96749027ee618556c4b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68c2bdcaa4c3fcf9d425fd1cf12cee84be9b20b0833a96749027ee618556c4b9->enter($__internal_68c2bdcaa4c3fcf9d425fd1cf12cee84be9b20b0833a96749027ee618556c4b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_34757b9cfe06cec5122e651bdbf79164ef51e9b44da3c68993ff06c49a8ff0b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34757b9cfe06cec5122e651bdbf79164ef51e9b44da3c68993ff06c49a8ff0b5->enter($__internal_34757b9cfe06cec5122e651bdbf79164ef51e9b44da3c68993ff06c49a8ff0b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mes Parametres - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_34757b9cfe06cec5122e651bdbf79164ef51e9b44da3c68993ff06c49a8ff0b5->leave($__internal_34757b9cfe06cec5122e651bdbf79164ef51e9b44da3c68993ff06c49a8ff0b5_prof);

        
        $__internal_68c2bdcaa4c3fcf9d425fd1cf12cee84be9b20b0833a96749027ee618556c4b9->leave($__internal_68c2bdcaa4c3fcf9d425fd1cf12cee84be9b20b0833a96749027ee618556c4b9_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_8dcf19a3a0d0949bbab39a73d11918302554c6fea53f0ce4097256b95c047be5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dcf19a3a0d0949bbab39a73d11918302554c6fea53f0ce4097256b95c047be5->enter($__internal_8dcf19a3a0d0949bbab39a73d11918302554c6fea53f0ce4097256b95c047be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_2a61bed4544139a185f3094aecb2dcfa3ae1cff98f320543203c4ad6a344f906 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a61bed4544139a185f3094aecb2dcfa3ae1cff98f320543203c4ad6a344f906->enter($__internal_2a61bed4544139a185f3094aecb2dcfa3ae1cff98f320543203c4ad6a344f906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Mes Paramètres</li>
    </ol>
";
        
        $__internal_2a61bed4544139a185f3094aecb2dcfa3ae1cff98f320543203c4ad6a344f906->leave($__internal_2a61bed4544139a185f3094aecb2dcfa3ae1cff98f320543203c4ad6a344f906_prof);

        
        $__internal_8dcf19a3a0d0949bbab39a73d11918302554c6fea53f0ce4097256b95c047be5->leave($__internal_8dcf19a3a0d0949bbab39a73d11918302554c6fea53f0ce4097256b95c047be5_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_959af19419f768f31a0db013ed923f0c987213aaa7ad0bd77ee70ff2af073e43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_959af19419f768f31a0db013ed923f0c987213aaa7ad0bd77ee70ff2af073e43->enter($__internal_959af19419f768f31a0db013ed923f0c987213aaa7ad0bd77ee70ff2af073e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_265a95dec740c40ed2551e9779efb5395a5cfb0c51fad2fafc227f137ee88d66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_265a95dec740c40ed2551e9779efb5395a5cfb0c51fad2fafc227f137ee88d66->enter($__internal_265a95dec740c40ed2551e9779efb5395a5cfb0c51fad2fafc227f137ee88d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 


<!-- Mes Parametres -->
";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "

";
        // line 20
        if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "valid", array())) {
            // line 21
            echo "  <div class=\"alert alert-error\">
    ";
            // line 22
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
  </div>
";
        }
        // line 25
        echo "
<div class=\"col-md-5\">
  <div class=\"form-group\">
    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
      <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" /> ";
        // line 31
        echo "    </div>
    ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
  </div>
</div>

";
        
        $__internal_265a95dec740c40ed2551e9779efb5395a5cfb0c51fad2fafc227f137ee88d66->leave($__internal_265a95dec740c40ed2551e9779efb5395a5cfb0c51fad2fafc227f137ee88d66_prof);

        
        $__internal_959af19419f768f31a0db013ed923f0c987213aaa7ad0bd77ee70ff2af073e43->leave($__internal_959af19419f768f31a0db013ed923f0c987213aaa7ad0bd77ee70ff2af073e43_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:Default:mesParametresMAIL.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 32,  130 => 31,  125 => 28,  120 => 25,  114 => 22,  111 => 21,  109 => 20,  104 => 18,  90 => 14,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \":backend:sidebar.html.twig\" %}

{% block title %}
  Mes Parametres - {{ parent() }}
{% endblock %}

{% block breadcrumb %}
    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('esf_espace_abonne_monProfil') }}\">Home</a></li>
        <li class=\"active\">Mes Paramètres</li>
    </ol>
{% endblock %}

{% block Content %} 


<!-- Mes Parametres -->
{{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}

{% if not form.vars.valid %}
  <div class=\"alert alert-error\">
    {{ form_errors(form) }}
  </div>
{% endif %}

<div class=\"col-md-5\">
  <div class=\"form-group\">
    {{ form_widget(form) }}
    <div>
      <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" /> {#value=\"{{ 'profile.edit.submit'|trans }}\" #}
    </div>
    {{ form_end(form) }}
  </div>
</div>

{% endblock %}", "ESFEspaceAbonneBundle:Default:mesParametresMAIL.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/Default/mesParametresMAIL.html.twig");
    }
}
