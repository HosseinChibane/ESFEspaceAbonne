<?php

/* @ESFEspaceAbonne/back/mesParametresMAIL.html.twig */
class __TwigTemplate_85bd9f57d72998fff84f211d7844fb0b42742bf6cc156caeb69aeb1376a1e212 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@ESFEspaceAbonne/back/mesParametresMAIL.html.twig", 1);
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
        $__internal_dfa84e0d6db1e943b0b16c98fa1c1571e02f1f52492b95b3d620a748e1d0172c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfa84e0d6db1e943b0b16c98fa1c1571e02f1f52492b95b3d620a748e1d0172c->enter($__internal_dfa84e0d6db1e943b0b16c98fa1c1571e02f1f52492b95b3d620a748e1d0172c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/mesParametresMAIL.html.twig"));

        $__internal_f497d3cbd7652b3555b1e319ac78eb7f7f91843a1492d7da28b1f378446779ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f497d3cbd7652b3555b1e319ac78eb7f7f91843a1492d7da28b1f378446779ea->enter($__internal_f497d3cbd7652b3555b1e319ac78eb7f7f91843a1492d7da28b1f378446779ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/mesParametresMAIL.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfa84e0d6db1e943b0b16c98fa1c1571e02f1f52492b95b3d620a748e1d0172c->leave($__internal_dfa84e0d6db1e943b0b16c98fa1c1571e02f1f52492b95b3d620a748e1d0172c_prof);

        
        $__internal_f497d3cbd7652b3555b1e319ac78eb7f7f91843a1492d7da28b1f378446779ea->leave($__internal_f497d3cbd7652b3555b1e319ac78eb7f7f91843a1492d7da28b1f378446779ea_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6dc3ebd296e3557276f9561899c5169500617fa16bdfa4a2a8c58f339749df02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dc3ebd296e3557276f9561899c5169500617fa16bdfa4a2a8c58f339749df02->enter($__internal_6dc3ebd296e3557276f9561899c5169500617fa16bdfa4a2a8c58f339749df02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f55d27110569603644a07d98c969180d6862de14d7e7242d74910eed7e8ded1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f55d27110569603644a07d98c969180d6862de14d7e7242d74910eed7e8ded1e->enter($__internal_f55d27110569603644a07d98c969180d6862de14d7e7242d74910eed7e8ded1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mes Parametres - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f55d27110569603644a07d98c969180d6862de14d7e7242d74910eed7e8ded1e->leave($__internal_f55d27110569603644a07d98c969180d6862de14d7e7242d74910eed7e8ded1e_prof);

        
        $__internal_6dc3ebd296e3557276f9561899c5169500617fa16bdfa4a2a8c58f339749df02->leave($__internal_6dc3ebd296e3557276f9561899c5169500617fa16bdfa4a2a8c58f339749df02_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_ef24fdf9bc55648e93a1ef8fe4d93e0b13ce265276af9b3040265f490cee845c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef24fdf9bc55648e93a1ef8fe4d93e0b13ce265276af9b3040265f490cee845c->enter($__internal_ef24fdf9bc55648e93a1ef8fe4d93e0b13ce265276af9b3040265f490cee845c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_e1e434138320799eb1bd39d8278058c0bf0df844c2976b832a7882549632c572 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1e434138320799eb1bd39d8278058c0bf0df844c2976b832a7882549632c572->enter($__internal_e1e434138320799eb1bd39d8278058c0bf0df844c2976b832a7882549632c572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Mes Paramètres</li>
    </ol>
";
        
        $__internal_e1e434138320799eb1bd39d8278058c0bf0df844c2976b832a7882549632c572->leave($__internal_e1e434138320799eb1bd39d8278058c0bf0df844c2976b832a7882549632c572_prof);

        
        $__internal_ef24fdf9bc55648e93a1ef8fe4d93e0b13ce265276af9b3040265f490cee845c->leave($__internal_ef24fdf9bc55648e93a1ef8fe4d93e0b13ce265276af9b3040265f490cee845c_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_af7d90ec12eb5fcc115ac3a57e11d373e68f050651c02ada87ae52c841b31f28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af7d90ec12eb5fcc115ac3a57e11d373e68f050651c02ada87ae52c841b31f28->enter($__internal_af7d90ec12eb5fcc115ac3a57e11d373e68f050651c02ada87ae52c841b31f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_d110e1fa9cb91920ef697979589826233091ff9b176429b34e5e6a3081cba647 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d110e1fa9cb91920ef697979589826233091ff9b176429b34e5e6a3081cba647->enter($__internal_d110e1fa9cb91920ef697979589826233091ff9b176429b34e5e6a3081cba647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_d110e1fa9cb91920ef697979589826233091ff9b176429b34e5e6a3081cba647->leave($__internal_d110e1fa9cb91920ef697979589826233091ff9b176429b34e5e6a3081cba647_prof);

        
        $__internal_af7d90ec12eb5fcc115ac3a57e11d373e68f050651c02ada87ae52c841b31f28->leave($__internal_af7d90ec12eb5fcc115ac3a57e11d373e68f050651c02ada87ae52c841b31f28_prof);

    }

    public function getTemplateName()
    {
        return "@ESFEspaceAbonne/back/mesParametresMAIL.html.twig";
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

{% endblock %}", "@ESFEspaceAbonne/back/mesParametresMAIL.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\back\\mesParametresMAIL.html.twig");
    }
}
