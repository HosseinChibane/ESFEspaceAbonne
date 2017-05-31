<?php

/* ESFEspaceAbonneBundle:back:langueThree.html.twig */
class __TwigTemplate_725bde8be467a36c69500ce4750a75a8b6c3eb3517ada51302b8d43e8346aab7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:back:langueThree.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'Content' => array($this, 'block_Content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":backend:sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b668ddd89e0fb3c3403450f2580cec3e544f969feb4f00957550c239744b053 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b668ddd89e0fb3c3403450f2580cec3e544f969feb4f00957550c239744b053->enter($__internal_9b668ddd89e0fb3c3403450f2580cec3e544f969feb4f00957550c239744b053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:langueThree.html.twig"));

        $__internal_3cd44e6335fc5e395784a88d979d0205eaaf702dd4e6786011b9341271727640 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cd44e6335fc5e395784a88d979d0205eaaf702dd4e6786011b9341271727640->enter($__internal_3cd44e6335fc5e395784a88d979d0205eaaf702dd4e6786011b9341271727640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:langueThree.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b668ddd89e0fb3c3403450f2580cec3e544f969feb4f00957550c239744b053->leave($__internal_9b668ddd89e0fb3c3403450f2580cec3e544f969feb4f00957550c239744b053_prof);

        
        $__internal_3cd44e6335fc5e395784a88d979d0205eaaf702dd4e6786011b9341271727640->leave($__internal_3cd44e6335fc5e395784a88d979d0205eaaf702dd4e6786011b9341271727640_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc3514cc1722536e682b4f91bcdecba57b9671b089e96357383ca0cc883cd9ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc3514cc1722536e682b4f91bcdecba57b9671b089e96357383ca0cc883cd9ed->enter($__internal_cc3514cc1722536e682b4f91bcdecba57b9671b089e96357383ca0cc883cd9ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7e1bf90977451b2eaced5816d6ca77ac0b4221876d8f5c1b95746416f88a2ed4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e1bf90977451b2eaced5816d6ca77ac0b4221876d8f5c1b95746416f88a2ed4->enter($__internal_7e1bf90977451b2eaced5816d6ca77ac0b4221876d8f5c1b95746416f88a2ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Inscription Langue - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7e1bf90977451b2eaced5816d6ca77ac0b4221876d8f5c1b95746416f88a2ed4->leave($__internal_7e1bf90977451b2eaced5816d6ca77ac0b4221876d8f5c1b95746416f88a2ed4_prof);

        
        $__internal_cc3514cc1722536e682b4f91bcdecba57b9671b089e96357383ca0cc883cd9ed->leave($__internal_cc3514cc1722536e682b4f91bcdecba57b9671b089e96357383ca0cc883cd9ed_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_58d066464da3d9ff6ea02fed4db93e5a89c9a14ce1ed5e59f9d9045c0aa14ffb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58d066464da3d9ff6ea02fed4db93e5a89c9a14ce1ed5e59f9d9045c0aa14ffb->enter($__internal_58d066464da3d9ff6ea02fed4db93e5a89c9a14ce1ed5e59f9d9045c0aa14ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_de1ff3b96380b9f1afee6bb1fef90fa582e74653d0c10805b7cf66d18d7b4ed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de1ff3b96380b9f1afee6bb1fef90fa582e74653d0c10805b7cf66d18d7b4ed7->enter($__internal_de1ff3b96380b9f1afee6bb1fef90fa582e74653d0c10805b7cf66d18d7b4ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 
  <div class=\"row\">
    <div class=\"col-md-12\">
      <h2>Etape 3</h2>
      <p>Veuillez joindre le(s) PDF precedent afin de valider votre demande pour que nous puissions la prendre en compte.</p>         
      
      ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

      ";
        // line 15
        if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "valid", array())) {
            // line 16
            echo "        <div class=\"alert alert-error\">
          ";
            // line 17
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
        </div>
      ";
        }
        // line 20
        echo "
      <div class=\"form-group\">
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "documentinscription", array()), "nom", array()), 'label', array("label" => "Document d'Inscription"));
        echo "
        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "documentinscription", array()), "nom", array()), 'widget');
        echo "
      </div>

      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"form-group\">
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "documentinscription", array()), "pdfFile", array()), 'widget');
        echo "
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"form-group\">
           <a class=\"btn btn-danger\" href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_langueStepsOne");
        echo "\">Retour à l'étape 1</a>
           ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "documentinscription", array()), "Enregistrer", array()), 'widget');
        echo "
         </div>
       </div>
     </div>

     ";
        // line 44
        echo "     ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "

     ";
        // line 46
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
   </div>
 </div>


";
        
        $__internal_de1ff3b96380b9f1afee6bb1fef90fa582e74653d0c10805b7cf66d18d7b4ed7->leave($__internal_de1ff3b96380b9f1afee6bb1fef90fa582e74653d0c10805b7cf66d18d7b4ed7_prof);

        
        $__internal_58d066464da3d9ff6ea02fed4db93e5a89c9a14ce1ed5e59f9d9045c0aa14ffb->leave($__internal_58d066464da3d9ff6ea02fed4db93e5a89c9a14ce1ed5e59f9d9045c0aa14ffb_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:back:langueThree.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 46,  135 => 44,  127 => 38,  123 => 37,  112 => 29,  103 => 23,  99 => 22,  95 => 20,  89 => 17,  86 => 16,  84 => 15,  79 => 13,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
  Inscription Langue - {{ parent() }}
{% endblock %}

{% block Content %} 
  <div class=\"row\">
    <div class=\"col-md-12\">
      <h2>Etape 3</h2>
      <p>Veuillez joindre le(s) PDF precedent afin de valider votre demande pour que nous puissions la prendre en compte.</p>         
      
      {{ form_start(form) }}

      {% if not form.vars.valid %}
        <div class=\"alert alert-error\">
          {{ form_errors(form) }}
        </div>
      {% endif %}

      <div class=\"form-group\">
        {{ form_label(form.documentinscription.nom, 'Document d\\'Inscription') }}
        {{ form_widget(form.documentinscription.nom) }}
      </div>

      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"form-group\">
            {{ form_widget(form.documentinscription.pdfFile) }}
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"form-group\">
           <a class=\"btn btn-danger\" href=\"{{ path('esf_espace_abonne_langueStepsOne') }}\">Retour à l'étape 1</a>
           {{ form_widget(form.documentinscription.Enregistrer) }}
         </div>
       </div>
     </div>

     {# Token CSRF #}
     {{ form_widget(form._token) }}

     {{ form_end(form, {'render_rest': false }) }}
   </div>
 </div>


{% endblock %}
", "ESFEspaceAbonneBundle:back:langueThree.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/back/langueThree.html.twig");
    }
}
